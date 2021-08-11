<?php
/*
 * File name: AddressAPIController.php
 * Last modified: 2021.02.18 at 12:08:19
 * Author: SmarterVision - https://codecanyon.net/user/smartervision
 * Copyright (c) 2021
 */

namespace App\Http\Controllers\API;


use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Repositories\AddressRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Exceptions\RepositoryException;
use Prettus\Validator\Exceptions\ValidatorException;

/**
 * Class AddressController
 * @package App\Http\Controllers\API
 */
class AddressAPIController extends Controller
{
    /** @var  AddressRepository */
    private $addressRepository;

    public function __construct(AddressRepository $addressRepo)
    {
        $this->addressRepository = $addressRepo;
    }

    /**
     * Display a listing of the Address.
     * GET|HEAD /addresses
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        try {
            $this->addressRepository->pushCriteria(new RequestCriteria($request));
            $this->addressRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }
        $addresses = $this->addressRepository->all();
        $this->filterCollection($request, $addresses);

        return $this->sendResponse($addresses->toArray(), __('lang.saved_successfully', ['operator' => __('lang.address')]));
    }

    public function filter(Request $request,$id)
    {
        try {
            $this->addressRepository->pushCriteria(new RequestCriteria($request));
            $this->addressRepository->pushCriteria(new LimitOffsetCriteria($request));
        } catch (RepositoryException $e) {
            return $this->sendError($e->getMessage());
        }
        $addresses = $this->addressRepository->where('country_id',$id)->get();

        return $this->sendResponse($addresses->toArray(), __('lang.saved_successfully', ['operator' => __('lang.address')]));
    }

    /**
     * Display the specified Address.
     * GET|HEAD /addresses/{id}
     *
     * @param int $id
     *
     * @return JsonResponse
     */
    public function show($id)
    {
        /** @var Address $address */
        if (!empty($this->addressRepository)) {
            $address = $this->addressRepository->findWithoutFail($id);
        }

        if (empty($address)) {
            return $this->sendError('Address not found');
        }

        return $this->sendResponse($address->toArray(), 'Address retrieved successfully');
    }

    public function store(Request $request)
    {
        $uniqueInput = $request->only("address");
        $otherInput = $request->except("address");
        try {
            $deliveryAddress = $this->addressRepository->updateOrCreate($uniqueInput, $otherInput);

        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($deliveryAddress->toArray(), __('lang.saved_successfully', ['operator' => __('lang.address')]));
    }

    /**
     * Update the specified DeliveryAddress in storage.
     *
     * @param int $id
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        $deliveryAddress = $this->addressRepository->findWithoutFail($id);

        if (empty($deliveryAddress)) {
            return $this->sendError('Delivery Address not found');
        }
        $input = $request->all();
        if ($input['is_default'] == true){
            $this->addressRepository->initIsDefault($input['user_id']);
        }
        try {
            $deliveryAddress = $this->addressRepository->update($input, $id);
        } catch (ValidatorException $e) {
            return $this->sendError($e->getMessage());
        }

        return $this->sendResponse($deliveryAddress->toArray(), __('lang.updated_successfully', ['operator' => __('lang.address')]));

    }

    /**
     * Remove the specified Address from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        $address = $this->addressRepository->findWithoutFail($id);

        if (empty($address)) {
            return $this->sendError('Delivery Address Not found');

        }

        $this->addressRepository->delete($id);

        return $this->sendResponse($address, __('lang.deleted_successfully',['operator' => __('lang.address')]));

    }
}

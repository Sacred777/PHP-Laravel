<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{

    private string $id, $name, $lastName, $position, $address, $email, $workData, $path, $url, $computerType, $computerVendor;
    private array $jsonData;

    /**
     * @param Request $request
     * @return void
     */
    private function storeData(Request $request): void
    {
        $this->name = $request->input('name');
        $this->lastName = $request->input('last-name');
        $this->position = $request->input('position');
        $this->address = $request->input('address');
        $this->email = $request->input('email');
        $this->workData = $request->input('work-data');
        $this->jsonData = json_decode($request->input('json-data'), true);

        $this->getPath($request);
        $this->getUrl($request);

        $this->computerType = $this->jsonData['computer']['type'];
        $this->computerVendor = $this->jsonData['computer']['vendor'];
    }

    /**
     * @return void
     */
    private function showData(): void
    {
        echo $this->name . '<br>';
        echo $this->lastName . '<br>';
        echo $this->position . '<br>';
        echo $this->address . '<br>';
        echo $this->email . '<br>';
        echo $this->workData . '<br>';
        echo $this->path . '<br>';
        echo $this->url . '<br>';
        echo $this->computerType . '<br>';
        echo $this->computerVendor . '<br>';
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('get-employee-data');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function store(Request $request): void
    {
        $this->storeData($request);
        $this->showData();
        dump($this->jsonData);
    }

    /**
     * @param Request $request
     * @param $id
     * @return void
     */
    public function update(Request $request, $id): void
    {
        $this->id = $id;
        $this->storeData($request);
        echo $this->id;
        $this->showData();
    }

    /**
     * @param Request $request
     * @return void
     */
    private function getPath(Request $request): void
    {
        $this->path = $request->path();
    }

    /**
     * @param Request $request
     * @return void
     */
    private function getUrl(Request $request): void
    {
        $this->url = $request->url();
    }
}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Models\Person;
use App\Repositories\PersonRepository;
    
use Illuminate\Http\Request;

class PersonController extends Controller {

    private $person_db;
    
    public function __construct()
    {
        $this->middleware('guest');
        $this->person_db = new PersonRepository;
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // $people = Person::all();
        $people = $this->person_db->all();
        return $this->renderHtml( 'people', ['people' => $people] );
	}
}

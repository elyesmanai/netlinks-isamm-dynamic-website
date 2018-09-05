<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/* Front Side of the Website, contains : 

	home page 
	about page
	team page
	alumni page
	projects page
	projects per pole page
	individual project page
	contact page

*/

Route::get('/', function () {

  $activities = DB::table('activities')->orderBy('id','desc')->get();

  $partners = DB::table('partners')->where('year', '2017')->get();

  $projects = DB::table('projects')->orderBy('id','desc')->limit(3)->get();

    return view('pages/front/welcome')->with('activities',$activities)->with('partners',$partners)->with('projects',$projects);

});


Route::get('/activities/{id}', function ($id) {

    $activity = DB::table('activities')->where('id',$id)->get();

    return view('pages/front/activity')->with('activity',$activity);

});


Route::get('/about/{part}', function ($part) {

    $contents = DB::table('contents')->where('page',$part)->get();

    switch ($part) {
        case 'History':
            $activities = DB::table('activities')->orderBy('id','desc')->get();
            return view('pages/front/History')->with('activities',$activities)->with('contents',$contents);
            break;

         case 'Netlinks_ISAMM':
            return view('pages/front/netlinksisamm')->with('contents',$contents);
            break;

         case 'Netlinks_Association':
            return view('pages/front/netlinksassociation')->with('contents',$contents);
            break;

        default:
            # code...
            break;
    }
});


Route::get('/family', function () {

   $contents = DB::table('contents')->where('page','team')->get();
 
   $users = DB::table('users')->orderBy('functiondept','desc')->get();

   $bureaufunctions = DB::table('bureaufunctions')->orderBy('id')->get();

   $departments = DB::table('departments')->get();

   $poles = DB::table('poles')->get();

   return view('pages/front/team')->with('users',$users)->with('poles',$poles)->with('departments',$departments)->with('bureaufunctions',$bureaufunctions )->with('contents',$contents);
});


Route::get('/alumni', function () {
    return view('pages/front/alumni');
});


Route::get('/projects', function () {

    $poles = DB::table('poles')->get();
    
    return view('pages/front/projects')->with('poles',$poles);
});


Route::get('/projects/{polename}', function ($polename) {

    $projects = DB::table('projects')->where('pole', $polename)->get();

    return view('pages/front/projects_per_pole')->with('projects',$projects)->with('pole', $polename);
});


Route::get('/projects/{polename}/{Project}', function ($polename,$projectname) {

    $project = DB::table('projects')->where('pole', $polename)->where('name',$projectname)->get();
    return view('pages/front/project')->with('project', $project);
});


Route::get('/contact', function () {

    $contents = DB::table('contents')->where('page','Contact')->get();

    return view('pages/front/contact')->with('contents',$contents);
});

/* Back End of the website, accesible by adding /login from the home page, contains :

	login page
	academy home page
	lessons page

*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Academy  Routes
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/academy', function () {

	  $poles = DB::table('poles')->get();

    return view('pages/academy/academy')->with('poles',$poles);
});


Route::get('/academy/{pole}/courses', function ($pole) {

    $courses = DB::table('courses')->where('pole', $pole)->get();

    return view('pages/academy/courses')->with('courses', $courses)->with('pole', $pole);
});


Route::get('/academy/{pole}/{course}/{slide}', function ($pole,$course,$slide) {

    $slides = DB::table('slides')->where('pole', $pole)->where('course',$course)->get();

    $slide = DB::table('slides')->where('pole', $pole)->where('course',$course)->where('id', $slide)->get();

    return view('pages/academy/lessons')->with('slide',$slide)->with('slides',$slides)->with('course',$course)->with('pole',$pole);
});


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Members  Routes
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/members', function () {

    $members = DB::table('users')->get();

    return view('pages/academy/members')->with('members', $members);
});


Route::get('/members/add', function () {

    return view('auth/register');
});


Route::get('/members/edit/{id}', function ($id) {

    $member = DB::table('users')->where('id',$id)->get();
    $insert=0;
    return view('pages/academy/editmember')->with('member', $member)->with('insert',$insert);
});



Route::post('/members/edit', function () {

    $password = bcrypt($_POST['password']);
    $active = intval($_POST['active']);
    $start_year = intval($_POST['start_year']);
    DB::table('users')
            ->where('id', $_POST['id'])
            ->update(
                     [
                     'name' => $_POST['name'],
                     'email' => $_POST['mail'],
                     'password' => $password ,
                     'functionbureau' => $_POST['functionbureau'],
                     'pole' => $_POST['pole'],
                     'functionpole' => $_POST['functionpole'],
                     'department' => $_POST['department'],
                     'functiondept' => $_POST['functiondept'],
                     'start_year' => $start_year,
                     'active' => $active
                     ]);

      $member = DB::table('users')->where('id',$_POST['id'])->get();
      $insert=1;
    return view('pages/academy/editmember')->with('member', $member)->with('insert', $insert);
    
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Webmaster  Routes
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/webmaster', function () {

    $contents = DB::table('contents')->get();

    return view('pages/academy/webmaster')->with('contents',$contents);
});


Route::get('/webmaster/edit/{id}', function ($id) {

    $content = DB::table('contents')->where('id',$id)->get();
    $insert=0;
    return view('pages/academy/edit/editcontent')->with('content', $content)->with('insert',$insert);
});



Route::post('/webmaster/edit', function () {

    DB::table('contents')
            ->where('id', $_POST['id'])
            ->update(
                     [
                     'name' => $_POST['name'],
                     'page' => $_POST['page'],
                     'content' => $_POST['content'],
                     ]);

      $content = DB::table('contents')->where('id',$_POST['id'])->get();
      $insert=1;
    return view('pages/academy/edit/editcontent')->with('content', $content)->with('insert', $insert);
    
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                    Dashboard  Routes
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('/admin/{part}', function ($part) {

    if($part=='general'){
        return view('pages/academy/general')->with('part',$part);
    }
    else{
        $columns =  DB::getSchemaBuilder()->getColumnListing($part);
        $datas = DB::table($part)->get();
        return view('pages/academy/dash')->with('datas',$datas)->with('part',$part)->with('columns',$columns);
    }
});


Route::get('/admin/{part}/add/', function ($part) {

    $columns =  DB::getSchemaBuilder()->getColumnListing($part);

    return view('pages/academy/crud/add')->with('part',$part)->with('columns',$columns);

});
 

Route::post('/admin/{part}/add/', function ($part) {

    switch ($part) {
        case 'users':
             DB::table('users')->insert([
                [
                'name' => $_POST['name'],
                'burfunctabbr' => $_POST['burfunctabbr'],
                'functionpole' => $_POST['functionpole'],
                'deptabbr' => $_POST['deptabbr'],
                'functiondept' => $_POST['functiondept'],
                'pole' => $_POST['pole'],
                'start_year' => $_POST['start_year'],
                'active' => $_POST['active'],
                'email' => $_POST['email'],
                'dehashedpassword' => $_POST['dehashedpassword'],
                ]
            ]);
            break;
        case 'projects':
            DB::table('projects')->insert([
                [
                'name' => $_POST['name'],
                'summary' => $_POST['summary'],
                'description' => $_POST['description'],
                'pole' => $_POST['pole'],
                ]
            ]);
            break;
        case 'clients':
             DB::table('clients')->insert([
                [
                'name' => $_POST['name'],
                ]
            ]);
            break;
        case 'courses':
             DB::table('courses')->insert([
                [
                'name' => $_POST['name'],
                'summary' => $_POST['summary'],
                'difficulty' => $_POST['difficulty'],
                'pole' => $_POST['pole'],
                ]
            ]);
            break;
        case 'slides':
             DB::table('slides')->insert([
                [
                'name' => $_POST['name'],
                'content' => $_POST['content'],
                'course' => $_POST['course'],
                'pole' => $_POST['pole'],
                ]
            ]);
            break;
        case 'questions':
             DB::table('questions')->insert([
                [
                'question' => $_POST['summary'],
                'answer' => $_POST['description'],
                'slide' => $_POST['pole'],
                ]
            ]);
            break;
        case 'partners':
             DB::table('partners')->insert([
                [
                'name' => $_POST['name'],
                'start_year' => $_POST['start_year'],
                ]
            ]);
            break;
        case 'bureaufunctions':
             DB::table('bureaufunctions')->insert([
                [
                'name' => $_POST['name'],
                ]
            ]);
            break;
        case 'departments':
             DB::table('departments')->insert([
                [
                'name' => $_POST['name'],
                'abbreviation' => $_POST['abbreviation'],
                'description' => $_POST['description'],
                ]
            ]);
            break;
        case 'poles':
             DB::table('poles')->insert([
                [
                'name' => $_POST['name'],
                'abbreviation' => $_POST['abbreviation'],
                'description' => $_POST['description'],
                'objectives' => $_POST['objectives'],
                ]
            ]);
            break;
        
        default:
            # code...
            break;
    }

    $columns =  DB::getSchemaBuilder()->getColumnListing($part);
    $datas = DB::table($part)->get();
    return view('pages/academy/dash')->with('datas',$datas)->with('part',$part)->with('columns',$columns);

});



Route::get('/admin/{part}/edit/{id}', function ($part,$id) {


    $columns =  DB::getSchemaBuilder()->getColumnListing($part);
    $contents = DB::table($part)->where('id',$id)->get();
    $insert=0;
    return view('pages/academy/crud/edit')->with('columns',$columns)->with('contents',$contents)->with('insert',$insert)->with('part',$part);

});


Route::post('/admin/{part}/edit/', function ($part) {

    $id = intval($_POST['id']);


        foreach ($_POST as $key => $value)
         {  
            if($key != '_token'){

                if($key == 'id'){$value = intval($value);}
                if($key == 'password'){$value = bcrypt($value);}
                if($key == 'active'){$value=intval($value);}
                if($key == 'start_year'){$value=intval($value);}

                DB::table($part)->where('id', $id)->update([$key => $value]);
            }
         }


      $columns =  DB::getSchemaBuilder()->getColumnListing($part);
      $contents = DB::table($part)->where('id',$id)->get();

  

      $insert=1;
    return view('pages/academy/crud/edit')->with('contents', $contents)->with('insert', $insert)->with('part',$part)->with('columns',$columns);
});


Route::get('/admin/{part}/delete/{id}', function ($part,$id) {

    DB::table($part)->where('id', $id)->delete();
    $columns =  DB::getSchemaBuilder()->getColumnListing($part);
    $datas = DB::table($part)->get();

    return view('pages/academy/dash')->with('part',$part)->with('datas', $datas)->with('columns',$columns);
});



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
//                                                      Settings  Routes
//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


Route::get('/settings', function () {

    $insert=0;
    $id = DB::table('users')->get();
    return view('pages/academy/settings')->with('insert', $insert);
});


Route::post('/settings', function () {

    $password = bcrypt($_POST['password']);
    $f = intval($_POST['id']);

  
    DB::table('users')
            ->where('id', $f)
            ->update(
                     [
                     'name' => $_POST['name'],
                     'email' => $_POST['mail'],
                     'password' => $password,
                     'dehashedpassword' => $_POST['password'], 
                     ]);

    $insert = 1;


    return view('pages/academy/settings')->with('insert', $insert);
    
});



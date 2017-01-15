<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//students
//student auth


Route::group(['middleware' => 'student', 'prefix' => 'student'], function () {
    Route::get('/student-dashboard',
        ['as' => 'get.student.dashBoard',
            'uses' => 'student\PageController@getStudentDashboard']);

    Route::get('/chat-forum',
        ['as' => 'get.chat.forum',
            'uses' => 'student\chatForumController@getChatForum']);

    Route::get('/available-schedule',
        ['as' => 'get.time.table',
            'uses' => 'student\TimeTableController@getTimeTableSelector']);

    Route::post('/available-schedule',
        ['as' => 'get.schedule.table',
            'uses' => 'student\TimeTableController@getScheduleTable']);


    Route::post('/save-batch/{id}/{sub}',
        ['as' => 'save.batch.response',
            'uses' => 'student\TimeTableController@postStudentBatchResponse']);


//    profile
    Route::get('/complete-student-profile',
        ['as' => 'student.complete.profile',
            'uses' => 'student\StudentController@getCompleteProfile']);

    Route::post('/save-student-profile/{email}',
        ['as' => 'post.student.complete.profile',
            'uses' => 'student\StudentController@postCompleteProfile']);

    Route::post('/save-timetable/{email}',
        ['as' => 'save.timetable',
            'uses' => 'student\StudentController@postCompleteProfile']);

    //change password

    Route::get('/change-password',
        ['as' => 'student.change.password',
            'uses' => 'student\StudentController@getChangePassword']);


    Route::post('/save-new-password',
        ['as' => 'post.change.stud.pass',
            'uses' => 'student\StudentController@postChangedPassword']);


});

//});


//visitors
Route::get('/',
    ['as' => 'get.visitors.homePage',
        'uses' => 'visitors\PageController@getIndexPage']);

Route::get('/about',
    ['as' => 'get.visitors.aboutPage',
        'uses' => 'visitors\PageController@getAboutPage']);

Route::get('/results',
    ['as' => 'visitors.pages.results',
        'uses' => 'visitors\PageController@getResultsPage']);

Route::get('/results/{year}',
    ['as' => 'show.result.by.year',
        'uses' => 'visitors\PageController@getResultsByYearPage']);

Route::get('/we-in-news',
    ['as' => 'visitors.pages.weInNews',
        'uses' => 'visitors\PageController@getWeInNewsPage']);

Route::get('/contact',
    ['as' => 'visitors.pages.contact',
        'uses' => 'visitors\PageController@getContactPage']);


Route::post('/contact',
    ['as' => 'post.visitors.contact.data',
        'uses' => 'visitors\PageController@postContactPageData']);


Route::get('/our-achievements',
    ['as' => 'visitors.pages.achievements',
        'uses' => 'visitors\PageController@getAchievementsPage']);


//    });
//visitors end


//    admin side route start


Route::get('/login',
    ['as' => 'get.login.page',
        'uses' => 'LoginController@getLoginPage']);

Route::get('/register',
    ['as' => 'get.register.page',
        'uses' => 'LoginController@getRegisterPage']);

Route::post('/register',
    ['as' => 'post.register.form',
        'uses' => 'LoginController@postRegisterForm']);

Route::get('/forgot-password',
    ['as' => 'get.forgotPassword.form',
        'uses' => 'LoginController@getForgotPasswordForm']);

Route::post('/login-done',
    ['as' => 'post.login.page',
        'uses' => 'LoginController@postLoginForm']);


//Route::group(['prefix' => 'admin'], function () {
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {

    Route::get('/logout',
        ['as' => 'logout.me',
            'uses' => 'LoginController@postLogoutMe']);

    Route::get('/admin-dashboard',
        ['as' => 'get.admin.dashBoard',
            'uses' => 'admin\PageController@getAdminDashboard']);

    Route::get('/all-achievements',
        ['as' => 'get.achievements',
            'uses' => 'admin\AchievementsController@getAchievementsList']);

    Route::get('/new-achievement',
        ['as' => 'get.add.achievement',
            'uses' => 'admin\AchievementsController@getAddAchievement']);

    Route::post('/add-achievement',
        ['as' => 'post.achievementsForm',
            'uses' => 'admin\AchievementsController@postAchievements']);


    Route::get('remove-achievement/{achie_slug}',
        ['as' => 'post.delete.achievements',
            'uses' => 'admin\AchievementsController@postDeleteAchievement']);

    Route::get('edit-achievement/{achie_slug}',
        ['as' => 'get.edit.achievements',
            'uses' => 'admin\AchievementsController@getEditAchievement']);

    Route::post('update-achievement/{ach_id}',
        ['as' => 'post.edited.achievement',
            'uses' => 'admin\AchievementsController@postEditedAchievement']);


    Route::get('/all-news',
        ['as' => 'get.news.list',
            'uses' => 'admin\NewsController@getNewsList']);


    Route::get('/add-news',
        ['as' => 'get.add.news',
            'uses' => 'admin\NewsController@getAddNews']);


    Route::post('/add-news',
        ['as' => 'post.add.news',
            'uses' => 'admin\NewsController@postAddNews']);

    Route::get('/delete-news/{news_slug}',
        ['as' => 'get.delete.news',
            'uses' => 'admin\NewsController@postDeleteNews']);

    Route::get('/edit-news/{news_slug}',
        ['as' => 'get.edit.news',
            'uses' => 'admin\NewsController@getEditNews']);


    Route::post('/edit-news/{news_slug}',
        ['as' => 'post.edited.news',
            'uses' => 'admin\NewsController@postEditedNews']);


    //admins

    Route::get('/all-admins',
        ['as' => 'get.admin.list',
            'uses' => 'admin\AdminController@getAllAdminList']);

    Route::get('/add-admin',
        ['as' => 'add.new.admin',
            'uses' => 'admin\AdminController@getAddNewAdmin']);

    Route::post('/add-new-admin',
        ['as' => 'post.add.new.admin',
            'uses' => 'admin\AdminController@postAddNewAdmin']);

    Route::post('/enable-disable-admin/{id}',
        ['as' => 'enable.disable.admin',
            'uses' => 'admin\AdminController@postEnableDisable']);


    Route::get('/delete-admin/{id}',
        ['as' => 'delete.admin',
            'uses' => 'admin\AdminController@postDeleteAdmin']);

    Route::get('/complete-your-profile/',
        ['as' => 'complete.your.profile',
            'uses' => 'admin\AdminController@getCompleteYourProfile']);

    Route::post('/save-complete-profile/{email}',
        ['as' => 'post.complete.profile',
            'uses' => 'admin\AdminController@postCompleteYourProfile']);

    //change password

    Route::get('/change-password/',
        ['as' => 'get.change.password',
            'uses' => 'admin\AdminController@getChangePassword']);

    Route::post('/save-password/',
        ['as' => 'post.change.password',
            'uses' => 'admin\AdminController@postChangePassword']);


//    time table
    Route::get('/all-schedule',
        ['as' => 'get.timeTable.list',
            'uses' => 'admin\TimeTableController@getTimeTableList']);

    Route::get('/add-schedule/{id}',
        ['as' => 'add.timeTable',
            'uses' => 'admin\TimeTableController@getAddNewBatch']);

    Route::post('/add-new-batch',
        ['as' => 'add.newBatch',
            'uses' => 'admin\TimeTableController@postAddNewBatch']);

    Route::post('/save-year-batch',
        ['as' => 'save.year.batch',
            'uses' => 'admin\TimeTableController@postSaveYearBatch']);

    Route::get('/schedule-table/{year}',
        ['as' => 'view.schedule.table',
            'uses' => 'admin\TimeTableController@getScheduleTable']);

    Route::get('/delete-schedule/{slug}',
        ['as' => 'delete.schedule.one',
            'uses' => 'admin\TimeTableController@postDeleteOneSchedule']);

    Route::get('/edit-schedule/{slug}',
        ['as' => 'edit.schedule.one',
            'uses' => 'admin\TimeTableController@getEditScheduleForm']);

    Route::post('/save-edited-schedule/{id}',
        ['as' => 'save.edited.schedule',
            'uses' => 'admin\TimeTableController@postEditScheduleForm']);


    Route::get('/delete-timetable-session/{session}',
        ['as' => 'delete.timetable.session',
            'uses' => 'admin\TimeTableController@postDeleteTimeTableSession']);


//    results

    Route::get('/all-results',
        ['as' => 'get.all.results',
            'uses' => 'admin\ResultsController@getAllResults']);

    Route::get('/add-result',
        ['as' => 'get.add.results',
            'uses' => 'admin\ResultsController@getAddResult']);

    Route::post('/add-new-result',
        ['as' => 'post.add.result',
            'uses' => 'admin\ResultsController@postAddResult']);

    Route::get('/delete-result/{id}',
        ['as' => 'get.delete.student.result',
            'uses' => 'admin\ResultsController@getDeleteResult']);

    Route::get('/edit-result/{id}',
        ['as' => 'get.edit.student.result',
            'uses' => 'admin\ResultsController@getEditResult']);


    Route::post('/save-edited-result/{id}',
        ['as' => 'post.edited.result',
            'uses' => 'admin\ResultsController@postEditedResult']);


    Route::get('/contact-messages',
        ['as' => 'get.contact.message',
            'uses' => 'admin\ContactMessageController@getAllContactMessages']);


    Route::get('/contact-messages/{id}',
        ['as' => 'get.delete.contact.message',
            'uses' => 'admin\ContactMessageController@getDeleteContactMessages']);


    Route::get('/list-popUp',
        ['as' => 'get.popUp',
            'uses' => 'admin\PopUpController@getPopUpList']);

    Route::get('/add-popUp',
        ['as' => 'get.add.popUp',
            'uses' => 'admin\PopUpController@getAddPopUp']);

    Route::post('/save-popUp',
        ['as' => 'post.add.popUp',
            'uses' => 'admin\PopUpController@postPopUpData']);


    Route::get('/delete-popUp/{id}',
        ['as' => 'get.delete.popUp',
            'uses' => 'admin\PopUpController@getDeletePopUpData']);


    Route::get('/edit-popUp/{id}',
        ['as' => 'get.edit.popup',
            'uses' => 'admin\PopUpController@getEditPopUpData']);

    Route::get('/save-popUp/{id}',
        ['as' => 'save.status.change',
            'uses' => 'admin\PopUpController@postSavePopUpData']);

    Route::post('/save-edited-popUp/{id}',
        ['as' => 'post.edited.popUp',
            'uses' => 'admin\PopUpController@postEditedPopUpData']);


    Route::post('/enable-disable-popUp/{id}',
        ['as' => 'enable.disable.popup',
            'uses' => 'admin\PopUpController@enableDisablePopUp']);


    Route::get('/join-requests',
        ['as' => 'get.join.requests',
            'uses' => 'admin\JoinRequestController@getJoinRequest']);

    Route::get('/delete-join-requests/{email}',
        ['as' => 'get.delete.join.request',
            'uses' => 'admin\JoinRequestController@getDeleteJoinRequest']);

    Route::post('/enable-student/{email}',
        ['as' => 'enable.disable.student',
            'uses' => 'admin\JoinRequestController@postEnableDisable']);


//        Notice board

    Route::get('/all-notices',
        ['as' => 'get.all.notices',
            'uses' => 'admin\NoticeController@allNotices']);

    Route::get('/add-notice',
        ['as' => 'get.add.notice',
            'uses' => 'admin\NoticeController@getAddNotice']);

    Route::post('/save-notice',
        ['as' => 'post.notice',
            'uses' => 'admin\NoticeController@postAddNoticeForm']);


    //students list

    Route::get('/all-students',
        ['as' => 'get.student.list',
            'uses' => 'admin\StudentsController@getAllStudents']);

    Route::get('/list-students',
        ['as' => 'get.student.table',
            'uses' => 'admin\StudentsController@getAllStudents']);

    Route::get('/student-details/{email}',
        ['as' => 'get.view.student',
            'uses' => 'admin\StudentsController@getViewSingleStudents']);

    Route::post('/student-disable/{email}',
        ['as' => 'post.disable.student',
            'uses' => 'admin\StudentsController@postDisableStudent']);


});
//});

//end of middleware web



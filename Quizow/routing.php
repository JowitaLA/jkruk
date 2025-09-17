<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('historyList'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('historyList',    'HistoryListCtrl');
Utils::addRoute('lastRecord',    'LastRecordCtrl',	['user','admin','mod']);
Utils::addRoute('loginShow',     'LoginCtrl');
Utils::addRoute('login',         'LoginCtrl');
Utils::addRoute('logout',        'LoginCtrl');

Utils::addRoute('userNew',     'RejestracjaCtrl');
Utils::addRoute('losowanieSave',    'AdminEditCtrl',	['admin']);
Utils::addRoute('rejestracjaSave',    'RejestracjaCtrl');
Utils::addRoute('panelAdmin',  'PersonEditCtrl',	['admin']);

Utils::addRoute('quiz1',       'QuizCtrl');
Utils::addRoute('quiz2',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz3',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz4',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz5',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz6',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz7',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz8',       'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('quiz9',       'QuizCtrl', ['user','admin','mod']);

Utils::addRoute('result1',            'QuizCtrl');
Utils::addRoute('result2',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result3',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result4',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result5',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result6',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result7',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result8',            'QuizCtrl', ['user','admin','mod']);
Utils::addRoute('result9',            'QuizCtrl', ['user','admin','mod']);	

// JOWI EDIT
Utils::addRoute('contactShow',       'ContactCtrl');	
Utils::addRoute('contact',       	 'ContactCtrl');	
	





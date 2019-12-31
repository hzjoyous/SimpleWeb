<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'www.nonodi.com');

// Project repository
set('repository', 'https://github.com/hzjoyous/hzjoyous.github.io.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false); 

// Shared files/dirs between deploys 
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server 
set('writable_dirs', []);
set('allow_anonymous_stats', false);


// Hosts

host('111.231.202.11')
    ->stage('prod')
    // ->set('branch', 'production')
    ->user('www')
    ->set('deploy_path', '/home/www/{{application}}');    

// Tasks
task('staticBuild',function(){
    run('/usr/local/xzsoft/php71/bin/php /home/www/lodge-unit-book-app/current/bin/console.php xiaozhu:migrations');
});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success'
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

<?php

use My_bash_class\My_bash_class;

/**
 * функция вывода заголовка выхода из программы и текста под заголовком (делает выход из прграммы)
 */
function exit_program($text = 'exit')
{
    $bash = new My_bash_class();
    $bash->bash("clear");
    $bash->EEF("
                                                                        iiii          tttt          
                                                                       i::::i      ttt:::t          
                                                                        iiii       t:::::t          
                                                                                   t:::::t          
                                    eeeeeeeeeeee  xxxxxxx      xxxxxxxiiiiiiittttttt:::::ttttttt    
                                  ee::::::::::::ee x:::::x    x:::::x i:::::it:::::::::::::::::t    
                                 e::::::eeeee:::::eex:::::x  x:::::x   i::::it:::::::::::::::::t    
                                e::::::e     e:::::e x:::::xx:::::x    i::::itttttt:::::::tttttt    
                                e:::::::eeeee::::::e  x::::::::::x     i::::i      t:::::t          
                                e:::::::::::::::::e    x::::::::x      i::::i      t:::::t          
                                e::::::eeeeeeeeeee     x::::::::x      i::::i      t:::::t          
                                e:::::::e             x::::::::::x     i::::i      t:::::t    tttttt
                                e::::::::e           x:::::xx:::::x   i::::::i     t::::::tttt:::::t
                                 e::::::::eeeeeeee  x:::::x  x:::::x  i::::::i     tt::::::::::::::t
                                  ee:::::::::::::e x:::::x    x:::::x i::::::i       tt:::::::::::tt
                                    eeeeeeeeeeeeeexxxxxxx      xxxxxxxiiiiiiii         ttttttttttt  ");
    $bash->EEF("

$text

");
    drop_folder_program_core();
    exit();
}

/**
 * функция вывода заголовка ошибки и текста под заголовком (делает выход из прграммы по причине ошибки)
 */
function exit_program_error($text = 'exit')
{
    $bash = new My_bash_class();
    $bash->bash("clear");
    $bash->EEF("
::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::
:::::::::::::::::::::::::::::::::::::::::::'########:'########::'########:::'#######::'########:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::##.....:: ##.... ##: ##.... ##:'##.... ##: ##.... ##::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::##::::::: ##:::: ##: ##:::: ##: ##:::: ##: ##:::: ##::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::######::: ########:: ########:: ##:::: ##: ########:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::##...:::: ##.. ##::: ##.. ##::: ##:::: ##: ##.. ##::::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::##::::::: ##::. ##:: ##::. ##:: ##:::: ##: ##::. ##:::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::########: ##:::. ##: ##:::. ##:. #######:: ##:::. ##::::::::::::::::::::::::::::::::::::::::::::
::::::::::::::::::::::::::::::::::::::::::::........::..:::::..::..:::::..:::.......:::..:::::..::::::::::::::::::::::::::::::::::::::::::::
");
    $bash->EEF("

$text

");
    drop_folder_program_core();
    exit();
}

/**
 * функция вывода заголовка завершения работы программы (делает выход из прграммы)
 */
function end_program($text = 'exit')
{
    $bash = new My_bash_class();
    $bash->bash("clear");
    $bash->EEF("
                                                                          ___          ___    ___                
                                                                        /'___\        /\_ \  /\_ \               
                      ____  __  __    ___    ___     __    ____    ____/\ \__/  __  __\//\ \ \//\ \    __  __    
                     /',__\/\ \/\ \  /'___\ /'___\ /'__`\ /',__\  /',__\ \ ,__\/\ \/\ \ \ \ \  \ \ \  /\ \/\ \   
                    /\__, `\ \ \_\ \/\ \__//\ \__//\  __//\__, `\/\__, `\ \ \_/\ \ \_\ \ \_\ \_ \_\ \_\ \ \_\ \  
                    \/\____/\ \____/\ \____\ \____\ \____\/\____/\/\____/\ \_\  \ \____/ /\____\/\____\\\/`____ \ 
                     \/___/  \/___/  \/____/\/____/\/____/\/___/  \/___/  \/_/   \/___/  \/____/\/____/ `/___/> \
                                                                                                           /\___/
                                                                                                           \/__/ 
                                     ____                                ___           __             
                                    /\  _`\                             /\_ \         /\ \__          
                                    \ \ \/\_\    ___     ___ ___   _____\//\ \      __\ \ ,_\    __   
                                     \ \ \/_/_  / __`\ /' __` __`\/\ '__`\\\ \ \   /'__`\ \ \/  /'__`\ 
                                      \ \ \L\ \/\ \L\ \/\ \/\ \/\ \ \ \L\ \\\_\ \_/\  __/\ \ \_/\  __/ 
                                       \ \____/\ \____/\ \_\ \_\ \_\ \ ,__//\____\ \____\\\ \__\ \____\
                                        \/___/  \/___/  \/_/\/_/\/_/\ \ \/ \/____/\/____/ \/__/\/____/
                                                                     \ \_\                            
                                                                      \/_/                      
");
    $bash->EEF("

$text

");
    exit();
}
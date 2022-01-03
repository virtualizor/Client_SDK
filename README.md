# Admin virtualizor SDK

Classified virtualizor admin sdk based on [APIStorm](https://github.com/yiiman-dev/apistorm) package

# what is different?

In this package, We have classified all the methods so that all the feedback is understandable for popular IDEs.

## Usage

for samples please clone package and install composer vendors

then create `.env` file from `.env-example` file and fill your server data

now execute ``index.php`` sample file in command line:

`php index.php`

# Composer install

`composer require yiiman/virtualizor`

## Methods list

| method                                                | classified  |
| ----------------------------------------------------- | ----------- |
| addippool                                             |   &check;   |
| addips                                                |   &cross;   |
| addiso                                                |   &cross;   |
| addplan                                               |   &cross;   |
| addserver                                             |   &cross;   |
| addtemplate                                           |   &cross;   |
| adduser                                               |   &cross;   |
| addvs                                                 |   &check;   |
| addiprange                                            |   &cross;   |
| addsg                                                 |   &cross;   |
| addbackupserver                                       |   &cross;   |
| addstorage                                            |   &cross;   |
| adddnsplan                                            |   &cross;   |
| add_admin_acl                                         |   &cross;   |
| addmg                                                 |   &cross;   |
| add_distro                                            |   &cross;   |
| addpdns                                               |   &cross;   |
| adminindex                                            |   &cross;   |
| apidoings                                             |   &cross;   |
| backup                                                |   &cross;   |
| bandwidth                                             |   &cross;   |
| cluster                                               |   &cross;   |
| config                                                |   &cross;   |
| cpu                                                   |   &cross;   |
| createssl                                             |   &cross;   |
| createtemplate                                        |   &cross;   |
| databackup                                            |   &cross;   |
| defaultvsconf                                         |   &cross;   |
| delete_vs                                             |   &check;   |
| disk                                                  |   &cross;   |
| downloadiso                                           |   &cross;   |
| editemailtemp                                         |   &cross;   |
| editippool                                            |   &cross;   |
| editips                                               |   &cross;   |
| editplan                                              |   &cross;   |
| editserver                                            |   &cross;   |
| edittemplate                                          |   &cross;   |
| edituser                                              |   &check;   |
| managevps                                             |   &check;   |
| editvs                                                |   &cross;   |
| emailconfig                                           |   &cross;   |
| emailtemp                                             |   &cross;   |
| filemanager                                           |   &cross;   |
| firewall                                              |   &cross;   |
| giveos                                                |   &cross;   |
| health                                                |   &cross;   |
| hostname                                              |   &cross;   |
| import                                                |   &cross;   |
| ippool                                                |   &cross;   |
| ips                                                   |   &check;   |
| iso                                                   |   &cross;   |
| kernelconf                                            |   &cross;   |
| license                                               |   &cross;   |
| vps_list                                              |   &check;   |
| login                                                 |   &cross;   |
| loginlogs                                             |   &cross;   |
| logs                                                  |   &cross;   |
| maintenance                                           |   &cross;   |
| makeslave                                             |   &cross;   |
| os                                                    |   &cross;   |
| ostemplates                                           |   &check;   |
| performance                                           |   &cross;   |
| phpmyadmin                                            |   &cross;   |
| plans                                                 |   &check;   |
| poweroff                                              |   &cross;   |
| processes                                             |   &cross;   |
| ram                                                   |   &cross;   |
| stat                                                  |   &check;   |
| rebuild                                               |   &check;   |
| restart                                               |   &check;   |
| restartservices                                       |   &cross;   |
| serverinfo                                            |   &cross;   |
| servers                                               |   &check;   |
| services                                              |   &cross;   |
| start                                                 |   &check;   |
| stop                                                  |   &check;   |
| status                                                |   &check;   |
| suspend                                               |   &check;   |
| unsuspend                                             |   &check;   |
| ubc                                                   |   &cross;   |
| updates                                               |   &cross;   |
| userlogs                                              |   &cross;   |
| userSuspend                                           |   &check;   |
| userUnsuspend                                         |   &check;   |
| users                                                 |   &check;   |
| vnc                                                   |   &cross;   |
| vpsbackupsettings                                     |   &cross;   |
| vpsbackups                                            |   &cross;   |
| vsbandwidth                                           |   &cross;   |
| vscpu                                                 |   &cross;   |
| vsram                                                 |   &cross;   |

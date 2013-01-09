<?php

class Add_Users {

    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('users')->insert(array(
            'name'=>'Скоморохов Андрей',
            'username'=>'admin',
            'password'=>Hash::make('123'),
            'note'=>'Начальник отдела ИТ, полные административные права',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'1'
        ));
        DB::table('users')->insert(array(
            'name'=>'Рудковский Семён',
            'username'=>'rsb',
            'password'=>Hash::make('1234'),
            'note'=>'Системный администратор, ограниченные административные права',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'1'
        ));
        DB::table('users')->insert(array(
            'name'=>'Саларев Сергей',
            'username'=>'ssa',
            'password'=>Hash::make('12345'),
            'note'=>'Аникейщик, минимальные на просмотр',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'1'
        ));
        DB::table('users')->insert(array(
            'name'=>'Лёвин Сергей Александрович',
            'username'=>'lsa',
            'password'=>Hash::make('123'),
            'note'=>'',
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s')
        ));
        DB::table('users')->insert(array(
            'name'=>'Антонов Николай Александрович',
            'username'=>'ana',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
        DB::table('users')->insert(array(
            'name'=>'Антонов Роман Николаевич',
            'username'=>'arn',
            'pssword'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
        DB::table('users')->insert(array(
            'name'=>'Ткачев Анатолий Васильевич',
            'username'=>'tav',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
         DB::table('users')->insert(array(
            'name'=>'Зеленков Николай Васильевич',
            'username'=>'znv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Кельмухаметова Лилия Явдатовна',
            'username'=>'kly',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Коломенцев Александр Михайлович',
            'username'=>'kam',
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Ермолаев Юрий Валентинович',
            'username'=>'euv',
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Строкач Евгений Михайлович',
            'username'=>'sem',
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Афанасенко Станислав Николаевич',
            'username'=>'asn',
            'password'=>Hash::make('123'),
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Теселкин Максим Владимирович',
            'username'=>'tmv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Сухоручкин Александр Михайлович',
            'username'=>'sam',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Сперанская Елена Викторовна',
            'username'=>'sev',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Сухоруков Денис Сергеевич',
            'username'=>'sds',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Романов Дмитрий Леонидович',
            'username'=>'rdl',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Колупаев Валерий Николаевич',
            'username'=>'kvn',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Скоба Лариса Юрьевна',
            'username'=>'slu',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Ушакова Наталья Викторовна',
            'username'=>'unv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Граздовская Анна Борисовна',
            'username'=>'gab',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));
            DB::table('users')->insert(array(
            'name'=>'Шевлекова Ирина Владимировна',
            'username'=>'shiv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                          
            DB::table('users')->insert(array(
            'name'=>'Шадрина Ольга Витальевна',
            'username'=>'shov',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                 
            DB::table('users')->insert(array(
            'name'=>'Бухонина Мария Алексеевна',
            'username'=>'bma',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Балакина Татьяна Александровна',
            'username'=>'bta',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Орлова Наталья Александровна',
            'username'=>'ona',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Темченко Татьяна Борисовна',
            'username'=>'ttb',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Захарова Жанна Владимировна',
            'username'=>'zjv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Попова Валерия Олеговна',
            'username'=>'pvo',
            'password'=>Hash::make('123'),
            'note'=>''
            
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Романовская Инесса Вячеславовна',
            'username'=>'riv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Столярова Елена Александровна',
            'username'=>'sea',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Плотникова Елена Васильевна',
            'username'=>'pev',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                       
            DB::table('users')->insert(array(
            'name'=>'Юрьев Эдуард Геннадьевич',
            'username'=>'ueg',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Генш Светлана Александровна',
            'username'=>'gsa',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Козленкова Екатерина Николаевна',
            'username'=>'ken',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Корчинский Анатолий Леонидович',
            'username'=>'kal',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Левин Александр Сергеевич',
            'username'=>'las',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Шишкалов Андрей Иванович',
            'username'=>'shai',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Лыков Андрей Евгеньевич',
            'username'=>'lae',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Лебедкин Николай Александрович',
            'username'=>'lna',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
             DB::table('users')->insert(array(
            'name'=>'Козленков Павел Александрович',
            'username'=>'kpa',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Кондерова Татьяна Викторовна',
            'username'=>'ktv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Семенец Александр Владимирович',
            'username'=>'sav',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Мальцев Иван Андреевич',
            'username'=>'mia',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Чепель Александр Константинович',
            'username'=>'chak',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
            DB::table('users')->insert(array(
            'name'=>'Хайбулина Виктория Алексеевна',
            'username'=>'hva',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Логинова Мария Николаевна',
            'username'=>'lmn',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
            DB::table('users')->insert(array(
            'name'=>'Зумерова Ольга Николаевна',
            'username'=>'zon',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Шайхатдинова Алия Фатыховна',
            'username'=>'shaf',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Мухин Сергей Владимирович',
            'username'=>'msv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                    
            DB::table('users')->insert(array(
            'name'=>'Коленкова Татьяна Алексеевна',
            'username'=>'kta',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Тихонов Кирилл Викторович',
            'username'=>'tkv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
         DB::table('users')->insert(array(
         'name'=>'Cвирская Татьяна Владимировна',
            'username'=>'stv',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
         DB::table('users')->insert(array(
         'name'=>'Вакушева Наталья Александровна',
            'username'=>'vna',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
         DB::table('users')->insert(array(
         'name'=>'Синицина Татьяна Александровна',
            'username'=>'sta',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
         DB::table('users')->insert(array(
         'name'=>'Гончарова Алла Романовна',
            'username'=>'gar',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Гранковская Татьяна Леонидовна',
            'username'=>'gtl',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                     
            DB::table('users')->insert(array(
            'name'=>'Прядкин Валерий Иванович',
            'username'=>'pvi',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                      
         DB::table('users')->insert(array(
            'name'=>'Арефьева Ирина Николаевна',
            'username'=>'auh',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
        DB::table('users')->insert(array(
            'name'=>'Бородина Валентина Иванович',
            'username'=>'bvi',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));                                                 
         DB::table('users')->insert(array(
            'name'=>'Борздный Виктор Иванович',
            'username'=>'bvi',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
             DB::table('users')->insert(array(
            'name'=>'Першина Елена Анатольевна',
            'username'=>'pea',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));   

            DB::table('users')->insert(array(
            'name'=>'Курбатова Ольга Владимировна',
            'username'=>'cov',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
                                                            
            DB::table('users')->insert(array(
            'name'=>'Казаренов Александр Петрович',
            'username'=>'cap',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
            DB::table('users')->insert(array(
            'name'=>'Неизвестных Анна Олеговна',
            'username'=>'nao',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
            DB::table('users')->insert(array(
            'name'=>'Ильина Юлия Олеговна',
            'username'=>'iyo',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
            DB::table('users')->insert(array(
            'name'=>'Карпова Ольга Эдуардовна',
            'username'=>'koe',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
            DB::table('users')->insert(array(
            'name'=>'Токарев Андрей Сергеевич',
            'username'=>'ефы',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        ));   
            DB::table('users')->insert(array(
            'name'=>'Ивушкин Сергей Николаевич',
            'username'=>'isn',
            'password'=>Hash::make('123'),
            'note'=>''
            'created_at'=>date('Y-m-d H:m:s'),
            'updated_at'=>date('Y-m-d H:m:s'),
            'is_admin'=>'0'
        )); 
}
    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        //
DB::table('users')->where('username','=','admin')->delete();
DB::table('users')->where('username','=','rsb')->delete();
DB::table('users')->where('username','=','saa')->delete();
DB::table('users')->where('username','=','lsa')->delete();
DB::table('users')->where('username','=','ana')->delete();
DB::table('users')->where('username','=','arn')->delete();
DB::table('users')->where('username','=','tav')->delete();
DB::table('users')->where('username','=','znv')->delete();
DB::table('users')->where('username','=','kly')->delete();
DB::table('users')->where('username','=','kam')->delete();
DB::table('users')->where('username','=','euv')->delete();
DB::table('users')->where('username','=','sem')->delete();
DB::table('users')->where('username','=','asn')->delete();
DB::table('users')->where('username','=','tmv')->delete();
DB::table('users')->where('username','=','sam')->delete();
DB::table('users')->where('username','=','sev')->delete();
DB::table('users')->where('username','=','sds')->delete();
DB::table('users')->where('username','=','rdl')->delete();
DB::table('users')->where('username','=','kvn')->delete();
DB::table('users')->where('username','=','slu')->delete();
DB::table('users')->where('username','=','unv')->delete();
DB::table('users')->where('username','=','gab')->delete();
DB::table('users')->where('username','=','shiv')->delete();
DB::table('users')->where('username','=','shov')->delete();
DB::table('users')->where('username','=','bma')->delete();
DB::table('users')->where('username','=','bta')->delete();
DB::table('users')->where('username','=','ona')->delete();
DB::table('users')->where('username','=','ttb')->delete();
DB::table('users')->where('username','=','zjv')->delete();
DB::table('users')->where('username','=','pvo')->delete();
DB::table('users')->where('username','=','riv')->delete();
DB::table('users')->where('username','=','sea')->delete();
DB::table('users')->where('username','=','pev')->delete();
DB::table('users')->where('username','=','ueg')->delete();
DB::table('users')->where('username','=','gsa')->delete();
DB::table('users')->where('username','=','ken')->delete();
DB::table('users')->where('username','=','kal')->delete();
DB::table('users')->where('username','=','las')->delete();
DB::table('users')->where('username','=','shai')->delete();
DB::table('users')->where('username','=','lae')->delete();
DB::table('users')->where('username','=','lna')->delete();
DB::table('users')->where('username','=','kpa')->delete();
DB::table('users')->where('username','=','ktv')->delete();
DB::table('users')->where('username','=','sav')->delete();
DB::table('users')->where('username','=','mia')->delete();
DB::table('users')->where('username','=','chak')->delete();
DB::table('users')->where('username','=','hva')->delete();
DB::table('users')->where('username','=','lmn')->delete();
DB::table('users')->where('username','=','zon')->delete();
DB::table('users')->where('username','=','shaf')->delete();
DB::table('users')->where('username','=','msv')->delete();
DB::table('users')->where('username','=','kta')->delete();
DB::table('users')->where('username','=','tkv')->delete();
DB::table('users')->where('username','=','stv')->delete();
DB::table('users')->where('username','=','vna')->delete();
DB::table('users')->where('username','=','sta')->delete();
DB::table('users')->where('username','=','gar')->delete();
DB::table('users')->where('username','=','gtl')->delete();
DB::table('users')->where('username','=','pvi')->delete();
DB::table('users')->where('username','=','auh')->delete();
DB::table('users')->where('username','=','bvi')->delete();
DB::table('users')->where('username','=','pea')->delete();
DB::table('users')->where('username','=','cov')->delete();
DB::table('users')->where('username','=','cap')->delete();
DB::table('users')->where('username','=','nao')->delete();
DB::table('users')->where('username','=','iyo')->delete();
DB::table('users')->where('username','=','koe')->delete();
DB::table('users')->where('username','=','tas')->delete();
DB::table('users')->where('username','=','isn')->delete();
    
    }
}
<?php

use Livewire\Volt\Volt;

Volt::route('/', 'users.index');
volt::route('/jenis-kelamin', 'gender.gender')->name('gender');
volt::route('/golongan-darah', 'bloodtype.bloodtype')->name('bloodtype');
volt::route('/pendidikan', 'education.education')->name('education');

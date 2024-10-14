<?php

use Livewire\Volt\Volt;

Volt::route('/', 'users.index');
volt::route('/jenis-kelamin', 'gender.gender')->name('gender');

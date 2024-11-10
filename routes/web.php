<?php

use Livewire\Volt\Volt;

Volt::route('/', 'users.index');
volt::route('/jenis-kelamin', 'gender.gender')->name('gender');
volt::route('/golongan-darah', 'bloodtype.bloodtype')->name('bloodtype');
volt::route('/pendidikan', 'education.education')->name('education');
volt::route('/pekerjaan', 'job.job')->name('job');
volt::route('/status-perkawinan', 'maritalstatus.maritalstatus')->name('maritalstatus');
volt::route('/hubungan-keluarga', 'familyrelationship.familyrelationship')->name('familyrelationship');
volt::route('/agama', 'religion.religion')->name('religion');

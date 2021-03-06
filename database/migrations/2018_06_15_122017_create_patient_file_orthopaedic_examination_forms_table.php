<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientFileOrthopaedicExaminationFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_file_orthopaedic_examination_forms', function (Blueprint $table) {
            $table->increments('id');
            /*$table->string('compalints');
            $table->string('name');
            $table->string('date');
            $table->integer('age');
            $table->string('sex');
            $table->string('height');
            $table->string('weight');
            $table->string('temp');
            $table->string('pulse_rate');
            $table->string('resp_rate');
            $table->string('major_hand_r_or_l');
            $table->string('blood_pressure_lying');
            $table->string('standing');
            $table->string('diagnosis');
            $table->string('well_nourished');
            $table->string('diabiliated');
            $table->string('fair');
            $table->string('disfigured');
            $table->string('poor');
            $table->string('obese');
            $table->string('head_tilt_l_n_r');
            $table->string('rotation_l_n_r');
            $table->string('shoulder_tilt_l_n_r');
            $table->string('rotation_l_n_r_1');
            $table->string('hip_tilt_l_n_r');
            $table->string('rotation_l_n_r_2');
            $table->string('biceps_l');
            $table->string('biceps_r');
            $table->string('triceps_l');
            $table->string('triceps_r');
            $table->string('radial_l');
            $table->string('radial_r');
            $table->string('patellar_l');
            $table->string('patellar_r');
            $table->string('achelles_l');
            $table->string('achelles_r');
            $table->string('dejerines_dejerines_l');
            $table->string('dejerines_dejerines_r');
            $table->string('Bechtew_l');
            $table->string('Bechtew_r');
            $table->string('adisons_l');
            $table->string('wrights_l');
            $table->string('wrights_r');
            $table->string('allens_l');
            $table->string('allens_r');
            $table->string('bdens_test_l');
            $table->string('bdens_test_r');
            $table->string('cervical_compressions_l');
            $table->string('cervical_compressions_r');
            $table->string('jacksons_compressions_l');
            $table->string('jacksons_compressions_r');
            $table->string('rotation_l_3');
            $table->string('rotation_r_3');
            $table->string('cervical_decompressions_l');
            $table->string('cervical_decompressions_r');
            $table->string('George_test_l');
            $table->string('George_test_r');
            $table->string('arc_of_abduction_l');
            $table->string('arc_of_abduction_r');
            $table->string('deltoid_extension_l');
            $table->string('deltoid_extension_r');
            $table->string('wrist_wrist_l');
            $table->string('wrist_wrist_r');
            $table->string('wrist_flexion_l');
            $table->string('wrist_flexion_r');
            $table->string('finger_cud_l');
            $table->string('finger_cud_r');
            $table->string('finger_spread_l');
            $table->string('finger_spread_r');
            $table->string('cold_hands_l');
            $table->string('cold_hands_r');
            $table->string('flexion_a');
            $table->string('flexion_b');
            $table->string('extension_a');
            $table->string('extension_b');
            $table->string('flexion_1_a');
            $table->string('flexion_1_b');
            $table->string('extension_1_a');
            $table->string('extension_1_b');
            $table->string('right_lateral_a');
            $table->string('right_lateral_b');
            $table->string('left_lateral_a');
            $table->string('left_lateral_b');
            $table->string('right_a');
            $table->string('right_b');
            $table->string('left_a');
            $table->string('left_b');
            $table->string('adams_sign_a');
            $table->string('adams_sign_b');
            $table->string('from_front_a');
            $table->string('from_front_b');
            $table->string('Dynamometer_grip_1a');
            $table->string('Dynamometer_grip_1b');
            $table->string('Dynamometer_grip_2a');
            $table->string('Dynamometer_grip_2b');
            $table->string('Dynamometer_grip_3a');
            $table->string('Dynamometer_grip_3b');
            $table->string('arms_1l');
            $table->string('arms_1r');
            $table->string('neck_1l');
            $table->string('neck_1r');
            $table->string('leg_1l');
            $table->string('leg_1r');
            $table->string('back_1l');
            $table->string('back_1r');
            $table->string('hypertensia');
            $table->string('paresthia');
            $table->string('positional');
            $table->string('anesthia');
            $table->string('hypesthesia');
            $table->string('ROMBERG');
            $table->string('finger_to_nose');
            $table->string('toe_to_shin');
            $table->string('finger_to_finger');
            $table->string('kEMPS_r');
            $table->string('kEMPS_l');
            $table->string('TRENDELENBERG_r');
            $table->string('TRENDELENBERG_l');
            $table->string('LEWINS_test_r');
            $table->string('LEWINS_test_l');
            $table->string('MINORS_SIGN_r');
            $table->string('MINORS_SIGN_l');
            $table->string('NORMAL_a');
            $table->string('NORMAL_b');
            $table->string('IMPAIRED_a');
            $table->string('IMPAIRED_b');
            $table->string('PAIN_a');
            $table->string('PAIN_b');
            $table->string('NEED_ASSISTANCE');
            $table->string('WALK_TOE');
            $table->string('HEEL_WALK_r');
            $table->string('HEEL_WALK_l');
            $table->string('TOE_WALK_r');
            $table->string('TOE_WALK_l');
            $table->string('BABY_WALK');*/
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_file_orthopaedic_examination_forms');
    }
}

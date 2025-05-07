<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $lastname
 * @property $firstname
 * @property $middlename
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $matriculation_number
 * @property $vocations
 * @property $level
 * @property $academic_session
 * @property $college
 * @property $department
 * @property $gender
 * @property $status
 * @property $enrolment
 * @property $general
 * @property $admin
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'lastname', 'firstname', 'middlename', 'email', 'matriculation_number', 'vocations', 'level', 'academic_session', 'college', 'department', 'gender', 'status', 'enrolment', 'general', 'admin', 'created_at'];



}

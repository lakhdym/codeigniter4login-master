<?php namespace App\Models;

use CodeIgniter\Model;

class ThemeModel extends Model{
  protected $table = 'theme';
  protected $allowedFields = ['name', 'value', 'height', 'slogan', 'date'];



}

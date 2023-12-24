<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	class AiCategoryIndex extends Model
	{
		use HasFactory;

		protected $table = 'ai_category_index';

		protected $fillable = [
			'ai_index_id',
			'ai_category_id',
		];
	}

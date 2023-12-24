<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Factories\HasFactory;
	use Illuminate\Database\Eloquent\Model;

	class AiTagIndex extends Model
	{
		use HasFactory;

		protected $table = 'ai_tag_index';

		protected $fillable = [
			'ai_index_id',
			'ai_tag_id',
		];
	}

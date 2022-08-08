<?php

namespace Neop\Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Neop\Blog\Models\Post;

class PostFactory extends Factory
{
   protected $model = Post::class;

   public function definition()
   {
      return [
         'title' => [
            'ar' => $this->faker->unique()->word(),
            'en' => $this->faker->unique()->word()
         ],
         'slug' => [
            'ar' => $this->faker->unique()->slug(),
            'en' => $this->faker->unique()->slug()
         ],
         'content' => 'هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد...هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق، إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية',
         'author_id' => Admin::get()->random()->id,
         'author_type' => Admin::class
      ];
   }
}

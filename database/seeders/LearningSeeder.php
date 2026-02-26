<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LearningSeeder extends Seeder
{
    public function run()
    {
        $langs = [
            ['name'=>'Go','slug'=>'go'],
            ['name'=>'PHP','slug'=>'php'],
            ['name'=>'C++','slug'=>'cpp'],
            ['name'=>'Python','slug'=>'python'],
        ];

        foreach($langs as $l){
            $lang = \App\Models\Language::updateOrCreate(['slug'=>$l['slug']], $l);

            $examples = match($lang->slug){
                'go' => [
                    ['title'=>'Hello World', 'code'=>"package main\nimport \"fmt\"\nfunc main(){\n  fmt.Println(\"Hello from Go\")\n}\n"],
                    ['title'=>'Сумма 1..10', 'code'=>"package main\nimport \"fmt\"\nfunc main(){\n  s:=0\n  for i:=1;i<=10;i++{s+=i}\n  fmt.Println(s)\n}\n"],
                ],
                'php' => [
                    ['title'=>'Hello World', 'code'=>"<?php\necho \"Hello from PHP\";\n"],
                    ['title'=>'Сумма 1..10', 'code'=>"<?php\n\$s=0;\nfor(\$i=1;\$i<=10;\$i++) \$s+=\$i;\necho \$s;\n"],
                ],
                'python' => [
                    ['title'=>'Hello World', 'code'=>"print(\"Hello from Python\")\n"],
                    ['title'=>'Сумма 1..10', 'code'=>"s=0\nfor i in range(1,11):\n  s+=i\nprint(s)\n"],
                ],
                'cpp' => [
                    ['title'=>'Hello World', 'code'=>"#include <iostream>\nusing namespace std;\nint main(){\n  cout << \"Hello from C++\";\n  return 0;\n}\n"],
                    ['title'=>'Сумма 1..10', 'code'=>"#include <iostream>\nusing namespace std;\nint main(){\n  int s=0; for(int i=1;i<=10;i++) s+=i;\n  cout<<s;\n  return 0;\n}\n"],
                ],
                default => [],
            };

            foreach($examples as $ex){
                \App\Models\Program::updateOrCreate(
                    ['language_id'=>$lang->id,'title'=>$ex['title']],
                    ['code'=>$ex['code'],'is_active'=>true]
                );
            }
        }
    }
}
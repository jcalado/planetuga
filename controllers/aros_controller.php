<?

class ArosController extends AppController {
	
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('create_users', 'create_groups','logout','initDB','admin_add');
	}
	
	function create_groups()
	{
		$aro = new Aro();

		//Here's all of our group info in an array we can iterate through
		$groups = array(
			0 => array(
				'alias' => 'admins'
			),
			1 => array(
				'alias' => 'bloggers'
			),
			2 => array(
				'alias' => 'users'
			),
			3 => array(
				'alias' => 'guests'
			),
		);

		//Iterate and create ARO groups
		foreach($groups as $data)
		{
			//Remember to call create() when saving in loops...
			$aro->create();

			//Save data
			$aro->save($data);
		}

		//Other action logic goes here...
	}
	
	
	function create_users()
	{
		$aro = new Aro();

		//Here are our user records, ready to be linked up to new ARO records
		//This data could come from a model and modified, but we're using static
		//arrays here for demonstration purposes.

		$users = array(
		0 => array(
		'parent_id' => 1,
		'model' => 'User',
		'foreign_key' => 1
		),	
		1 => array(
		'parent_id' => 1,
		'model' => 'User',
		'foreign_key' => 2
		),
		2 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 3
		),
		3 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 4
		),
		4 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 5
		),
		5 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 6
		),
		6 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 7
		),
		7 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 8
		),
		8 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 9
		),
		9 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 10
		),
		10 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 11
		),
		11 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 12
		),
		12 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 13
		),
		13 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 14
		),
		14 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 15
		),
		15 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 16
		),
		16 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 17
		),
		17 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 18
		),
		18 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 19
		),
		19 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 20
		),
		20 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 21
		),
		21 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 22
		),
		22 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 23
		),
		23 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 24
		),
		24 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 25
		),
		25 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 26
		),
		26 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 27
		),
		27 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 28
		),
		28 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 29
		),
		29 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 30
		),
		30 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 31
		),
		31 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 32
		),
		32 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 33
		),
		33 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 34
		),
		34 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 35
		),
		35 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 36
		),
		36 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 37
		),
		37 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 38
		),
		38 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 39
		),
		39 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 40
		),
		40 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 41
		),
		41 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 42
		),
		42 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 43
		),
		43 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 44
		),
		44 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 45
		),
		45 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 46
		),
		46 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 47
		),
		47 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 48
		),
		48 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 49
		),
		49 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 50
		),
		50 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 51
		),
		51 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 52
		),
		52 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 53
		),
		53 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 54
		),
		54 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 55
		),
		55 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 56
		),
		56 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 57
		),
		57 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 58
		),
		58 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 59
		),
		59 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 60
		),
		60 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 61
		),
		61 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 62
		),
		62 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 63
		),
		63 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 64
		),
		64 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 65
		),
		65 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 66
		),
		66 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 67
		),
		67 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 68
		),
		68 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 69
		),
		69 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 70
		),
		70 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 71
		),
		71 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 72
		),
		72 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 73
		),
		73 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 74
		),
		74 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 75
		),
		75 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 76
		),
		76 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 77
		),
		77 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 78
		),
		78 => array(
		'parent_id' => 2,
		'model' => 'User',
		'foreign_key' => 79
		),
		79 => array(
		'parent_id' => 3,
		'model' => 'User',
		'foreign_key' => 80
		)			
	);


		//Iterate and create AROs (as children)
		foreach($users as $data)
		{
			//Remember to call create() when saving in loops...
			$aro->create();

			//Save data
			$aro->save($data);
		}

		//Other action logic goes here...
	}
	
}

?>
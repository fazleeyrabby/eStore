=======================================================================
public function hotel_search(Request $request)
  {
//    return $request;
    if (isset($request->check_in) && isset($request->check_out)) {
      $check_in = DateTime::createFromFormat('m/d/Y', $request->check_in)->format('Y-m-d');
      $check_out = DateTime::createFromFormat('m/d/Y', $request->check_out)->format('Y-m-d');
      $diff = $this->__diff_day($check_in, $check_out);
      $available_room = DB::table('rooms')
        ->leftJoin('room_checkings', 'room_checkings.room_id', '=', 'rooms.id')
//        ->where(function ($query) use ($check_in, $check_out) {
//          $query->where([['room_checkings.start_date', '<', $check_in ], ['room_checkings.end_date','<', $check_in ]])
//          ->orWhere([['room_checkings.start_date', '>', $check_out], ['room_checkings.end_date', '>', $check_out]]);
//        })
        ->orWhere([['room_checkings.start_date', '>=', $check_in ], ['room_checkings.start_date','<=', $check_out ]])
        ->orWhere([['room_checkings.start_date', '<=', $check_in ], ['room_checkings.end_date','>=', $check_out ]])
        ->orWhere([['room_checkings.end_date', '>=', $check_in ], ['room_checkings.end_date','<=', $check_out ]])
        ->groupby('rooms.id')
        ->pluck('rooms.id');
//      return $available_room;
      if (isset($request->district) && isset($request->room)) {
        $district_id = $request->district;
        $room_id = $request->room;
        $rooms = DB::table('rooms')
          ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
          ->join('room_types', 'room_types.id', '=', 'rooms.room_type_id')
          ->join('districts', 'districts.id', '=', 'hotels.district_id')
          ->join('divisions', 'districts.division_id', '=', 'divisions.id')
          ->select('hotels.id as hotel_id', 'hotels.name as hotel_name',  'hotels.phone as hotel_phone',  'hotels.email as hotel_email',
            'hotels.logo as hotel_logo', 'hotels.address as hotel_address', 'rooms.id as room_id', 'rooms.room_number as room_number',
            'rooms.amount as room_amount', 'rooms.attached_bath as room_attached_bath', 'rooms.type as room_type', 'rooms.description as room_description', 'room_types.id as room_type_id',
            'room_types.name as room_type_name', 'room_types.capacity as room_type_capacity', 'districts.id as district_id',  'districts.name as district_name',
            'divisions.id as division_id', 'divisions.name as division_name')
          ->where('room_types.status', 'active')
          ->where('hotels.status', 'active')
//          ->where('rooms.status', 'available')
          ->whereNotIn('rooms.id', $available_room)
          ->where('districts.id', $district_id)
          ->where('room_types.id', $room_id)
          ->get();
//        return $rooms;
      }
      if (isset($request->district) && !isset($rooms)) {
        $district_id = $request->district;
        $rooms = DB::table('rooms')
          ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
          ->join('room_types', 'room_types.id', '=', 'rooms.room_type_id')
          ->join('districts', 'districts.id', '=', 'hotels.district_id')
          ->join('divisions', 'districts.division_id', '=', 'divisions.id')
          ->select('hotels.id as hotel_id', 'hotels.name as hotel_name',  'hotels.phone as hotel_phone',  'hotels.email as hotel_email',
            'hotels.logo as hotel_logo', 'hotels.address as hotel_address', 'rooms.id as room_id', 'rooms.room_number as room_number',
            'rooms.amount as room_amount', 'rooms.attached_bath as room_attached_bath', 'rooms.type as room_type', 'rooms.description as room_description', 'room_types.id as room_type_id',
            'room_types.name as room_type_name', 'room_types.capacity as room_type_capacity', 'districts.id as district_id',  'districts.name as district_name',
            'divisions.id as division_id', 'divisions.name as division_name')
          ->where('room_types.status', 'active')
          ->where('hotels.status', 'active')
//          ->where('rooms.status', 'available')
          ->whereNotIn('rooms.id', $available_room)
          ->where('districts.id', $district_id)
          ->get();
//        return $rooms;
      }
      if (isset($request->room) && !isset($rooms)) {
        $room_id = $request->room;
        $rooms = DB::table('rooms')
          ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
          ->join('room_types', 'room_types.id', '=', 'rooms.room_type_id')
          ->join('districts', 'districts.id', '=', 'hotels.district_id')
          ->join('divisions', 'districts.division_id', '=', 'divisions.id')
          ->select('hotels.id as hotel_id', 'hotels.name as hotel_name',  'hotels.phone as hotel_phone',  'hotels.email as hotel_email',
            'hotels.logo as hotel_logo', 'hotels.address as hotel_address', 'rooms.id as room_id', 'rooms.room_number as room_number',
            'rooms.amount as room_amount', 'rooms.attached_bath as room_attached_bath', 'rooms.type as room_type', 'rooms.description as room_description',
            'room_types.id as room_type_id', 'room_types.name as room_type_name', 'room_types.capacity as room_type_capacity',
            'districts.id as district_id',  'districts.name as district_name', 'divisions.id as division_id', 'divisions.name as division_name')
          ->where('room_types.status', 'active')
          ->where('hotels.status', 'active')
//          ->where('rooms.status', 'available')
          ->whereNotIn('rooms.id', $available_room)
          ->where('room_types.id', $room_id)
          ->get();
//        return $rooms;
      }
//      return $request;
//      return $request->district;
      if(!isset($rooms)){
        $rooms = DB::table('rooms')
          ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
          ->join('room_types', 'room_types.id', '=', 'rooms.room_type_id')
          ->join('districts', 'districts.id', '=', 'hotels.district_id')
          ->join('divisions', 'districts.division_id', '=', 'divisions.id')
          ->select('hotels.id as hotel_id', 'hotels.name as hotel_name',  'hotels.phone as hotel_phone',  'hotels.email as hotel_email',
            'hotels.logo as hotel_logo', 'hotels.address as hotel_address', 'rooms.id as room_id', 'rooms.room_number as room_number',
            'rooms.amount as room_amount', 'rooms.attached_bath as room_attached_bath', 'rooms.type as room_type', 'rooms.description as room_description',
            'room_types.id as room_type_id', 'room_types.name as room_type_name', 'room_types.capacity as room_type_capacity',
            'districts.id as district_id',  'districts.name as district_name', 'divisions.id as division_id', 'divisions.name as division_name')
          ->where('room_types.status', 'active')
          ->where('hotels.status', 'active')
          ->whereNotIn('rooms.id', $available_room)
          ->get();
      }
======================================================================
public function courseTitle($query=""){
		$courses = Course::orderBy('title');
		if(!empty($query)){
			$courses->Where('title','like','%'.$query.'%');
		}
		$courses = $courses->get();
		return $courses->toJson();
	}

	public function courseCode($query=""){
		$courses = Course::orderBy('title');
		if(!empty($query)){
				$courses->Where('code','like','%'.$query.'%');
			}
			$courses = $courses->get();
		return $courses->toJson();
	}
=======================================================================
public function index(Request $request)
    {
        $key = $request->input('key'); 
        $status = $request->input('status'); 
        $input = $request->only(['key','status']);
        $courses = Course::orderBy('course_id');
        if(!empty($key)){
            $courses->where('title','like','%'.$key.'%');
            $courses->orWhere('code','like','%'.$key.'%');
        }
        if(!empty($status)){
            if($status =="Active" ){
                $status = 1;
            }else{
                $status = 0;
            }
            $courses->where('status','like','%'.$status.'%');
        }
        $courses = $courses->paginate(12);
        $courses->appends($input);
        return view('admin.course.courses',compact('courses'));
    }
======================================================================
  $exam_type = $request->input('exam_type');
        $course_id = $request->input('course_id');
        $batch = $request->input('batch');
        $date = $request->input('date');
        $date = date("Y-d-m", strtotime($date));
        $time = $request->input('time');
        if (empty($exam_type) || empty($course_id) || empty($batch) || empty($date) || empty($time)) {
            flash('Please check all field','warning');
            return back()->withInput();
        }
        $allQuestion = Question::where('exam_type', '=', $exam_type)->where('course_id', '=', $course_id)->get()->toArray();
=======================================================================
public function allUser(Request $request){
		$key = $request->input('key'); 
		$status = $request->input('status'); 
		$input = $request->only(['key','starus']);
		$users = User::orderBy('user_id');
		if(!empty($key)){
			$users->where('email','like','%'.$key.'%');
			$users->orWhere('fullname','like','%'.$key.'%');
		}
		if(!empty($status)){
			if($status =="Active" ){
				$status = 1;
			}elseif($status == "Pending"){
				$status = 0;
			}else{
				$status = -1;
			}
			$users->where('status','like','%'.$status.'%');
		}
		$users = $users->paginate(12);
		$users->appends($input);
		return view('admin.user.users',compact('users'));
	}
======================================================================
$today_user = User::whereDate('created_at', Carbon::today())->count();
        $dealers = User::where('role','dealer')->count();
        $sub_dealers = User::where('role','sub-dealer')->count();
        $todays_income = Bonus::whereDate('created_at', Carbon::today())->where('user_id', Auth::user()->id)->sum('amount');
        $this_month_income = Bonus::whereMonth('created_at', Carbon::now()->month)->where('user_id', Auth::user()->id)->sum('amount');
        $last_month_income = Bonus::whereMonth('created_at', Carbon::now()->subMonth()->month )->where('user_id', Auth::user()->id)->sum('amount');
        $this_year_income = Bonus::whereYear('created_at', Carbon::now()->year)->where('user_id', Auth::user()->id)->sum('amount');
        $users = User::orderBy('id','desc')->take(10)->get();
=======================================================================
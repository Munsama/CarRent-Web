class UserController extends Controller
{
    public function index()
    {
        $dt = DB::table('tbl_user')->get();
        return view('admin.user', ['dt' => $dt]);
    }

    public function create()
    {
        return view('admin.add_produk');
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $nama_file = str_random(7) . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'images/user';
        $file->move($tujuan_upload, $nama_file);

        $nourut = DB::table('tbl_user')->max('id_user');
        $no = (int)substr($nourut, 3, 3);
        $no++;
        $char = "USR";
        $newID = $char . sprintf("%03s", $no);

        $ar = [$newID, $request['email'], $request['id_lvl'], $request['nama_user'], $request['password'], $request['alamat'], $request['telpon'], $request['jenis_kelamin'], $nama_file];
        DB::insert('insert into tbl_user (id_user,email,id_lvl,nama_user,password,alamat,telpon,jenis_kelamin,foto) values (?,?,?,?,?,?,?,?,?)', $ar);
        return redirect('admin-user');
    }

    public function show($id)
    {
        $dt = DB::table('tbl_user')->where('id_user', '=', $id)->get();
        if (count($dt) == 1)
            return view('admin.user.show', ['dt' => $dt]);
        else return redirect('admin-user');
    }

    public function edit($id)
    {
        $dt = DB::table('tbl_user')->where('id_user', '=', $id)->get();
        if (count($dt) == 1) {
            $dt = DB::table('tbl_user')->where('id_user', '=', $id)->get();
            return view('admin-user', ['dt' => $dt]);
        } else return redirect('admin-user');
    }

    public function update(Request $request, $id)
    {
        $file = $request->file('file');
        $nama_file = str_random(7) . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'images/user';
        $file->move($tujuan_upload, $nama_file);

        $ar = [$request['email'], $request['id_lvl'], $request['nama_user'], $request['password'], $request['alamat'], $request['telpon'], $request['jenis_kelamin'], $nama_file, $id];
        DB::update('update tbl_user set email=?, id_lvl=?, nama_user=?, password=?, alamat=?, telpon=?, jenis_kelamin=?, foto=? where id_user=?', $ar);

        return redirect('admin-user');
    }

    public function destroy($id)
    {
        DB::delete('delete from tbl_user where id_user=?', [$id]);
        return redirect('admin-user');
    }
}
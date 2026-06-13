public function index()
{
    $user = Auth::user();

    $nama_lengkap = $user->nama_depan . ' ' . $user->nama_belakang;

    dd($nama_lengkap); // BARIS TESTING

    $waktu_login = now()->timezone('Asia/Jakarta')
                        ->locale('id')
                        ->isoFormat('dddd, D MMMM Y | HH:mm');

    return view('dashboard', compact('nama_lengkap', 'waktu_login'));
}
namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class MahasiswaExport implements FromCollection
{
    public function collection()
    {
        return Mahasiswa::all();
    }
}

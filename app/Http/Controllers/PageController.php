use App\Models\CommercialDocument;
use App\Models\CommercialMapArea;

public function comercial()
{
    $documents = CommercialDocument::with('creator')->orderBy('category')->get();
    $areas = CommercialMapArea::all();

    return view('pages.comercial', compact('documents', 'areas'));
}
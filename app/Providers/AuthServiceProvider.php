use App\Models\CommercialDocument;
use App\Policies\CommercialDocumentPolicy;

protected $policies = [
    CommercialDocument::class => CommercialDocumentPolicy::class,
];
use App\Models\News;

use App\Models\Category;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Foundation\Validation\ValidatesRequests;


class NewsController extends BaseController
{
    use ValidatesRequests;

    public function index ()
    {
	@@ -20,8 +22,18 @@ public function index ()
        return view('admin/adminPanel', ['news' => $news]);
    }

    public function create (Request $request, Category $category)
    {
        // $rules = [
        //     'category_id' => 'exists:category_news,id',
        // ];

        $rules = [
            'title' => 'exists:category_news,title',
        ];

        $this->validate($request, $rules);

        $news = new News ();
        if($request->isMethod('post')) {
        // dd($request);
	@@ -34,6 +46,7 @@ public function create (Request $request)
            'news' => $news,
            'route' => 'admin::news::create',
            'title' => 'Добавление новости',
            'categories' => $category->getList(),
        ]);
    }
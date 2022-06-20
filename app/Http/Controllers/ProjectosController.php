<?php

namespace App\Http\Controllers;

use App\Models\Projectos;
use Illuminate\Http\Request;

class ProjectosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Obtengo todas las noticias ordenadas por fecha más reciente
        $rowset = Projectos::orderBy("id","DESC")->get();

        return view('admin.proyectos.index',[
            'rowset' => $rowset,
        ]);
    }
    public function crear()
    {
        //Creo un nuevo usuario vacío
        $row = new Projectos();

        return view('admin.proyectos.editar',[
            'row' => $row,
        ]);
    }
    public function guardar(ProyectoRequest $request)
    {
        Projectos::create([
            'titulo' => $request->titulo,
            'alltecnicas' => $request->alltecnicas,
            'entradilla' => $request->entradilla,
            'slug' => $this->getSlug($request->titulo),
            'texto1' => $request->texto1,
            'texto2' => $request->texto2,
            'texto3' => $request->texto3,
            'enlace1' => $request->enlace1,
            'enlace2' => $request->enlace2,
            'enlace3' => $request->enlace3,
        ]);
        $imagenes = "";
        if (isset($_FILES['imagenes'])) {
            $cantidad = count($_FILES["imagenes"]["tmp_name"]);
            $archivo = $request->file('imagenes');
            if($archivo!=null) {
                for ($i = 0; $i < $cantidad; $i++) {
                    $nombre = substr($_FILES["imagenes"]["name"][$i], 0, -4);
                    $imagenes = $imagenes . $nombre . ",";
                    $archivo[$i]->move(public_path() . "/img/portfolio/proyectos/" . $this->getSlug($request->titulo) . "/", $archivo[$i]->getClientOriginalName());
                }
                Projectos::where('titulo', $request->titulo)->update(['imagenes' => $imagenes]);
            }
        }
        //Imagen hover
        if ($request->hasFile('hover')) {
            $archivo = $request->file('hover');
            $archivo->move(public_path()."/img/portfolio/proyectos/".$this->getSlug($request->titulo)."/", $archivo->getClientOriginalName());
        }

        return redirect('admin/proyectos')->with('success', 'proyecto <strong>'.$request->titulo.'</strong> creado');
    }

    public function editar($id)
    {

        $row = Projectos::where('id', $id)->firstOrFail();

        return view('admin.proyectos.editar',[
            'row' => $row,
        ]);
    }

    public function actualizar(ProyectoRequest $request, $id)
    {
        $row = Projectos::findOrFail($id);
        Projectos::where('id', $row->id)->update([
            'titulo' => $request->titulo,
            'alltecnicas' => $request->alltecnicas,
            'entradilla' => $request->entradilla,
            'texto1' => $request->texto1,
            'texto2' => $request->texto2,
            'texto3' => $request->texto3,
            'enlace1' => $request->enlace1,
            'enlace2' => $request->enlace2,
            'enlace3' => $request->enlace3,
        ]);
        $imagenes = "";
        //Imagenes carrousel
        if (isset($_FILES['imagenes'])) {
            $cantidad = count($_FILES["imagenes"]["tmp_name"]);
            $archivo = $request->file('imagenes');
            if($archivo!=null){
                for ($i = 0; $i < $cantidad; $i++) {
                    $nombre = substr($_FILES["imagenes"]["name"][$i], 0, -4);
                    $imagenes = $imagenes . $nombre . ",";
                    $archivo[$i]->move(public_path() . "/img/portfolio/proyectos/" . $row->slug . "/", $archivo[$i]->getClientOriginalName());
                }
                Projectos::where('id', $row->id)->update(['imagenes' => $row->imagenes . $imagenes]);
            }
        }
        //Imagen hover
        if ($request->hasFile('hover')) {
            $archivo = $request->file('hover');
            $archivo->move(public_path()."/img/portfolio/proyectos/".$row->slug."/", $archivo->getClientOriginalName());
        }

        return redirect('admin/proyectos')->with('success', 'proyecto <strong>'.$imagenes.'</strong> actualizado.');
    }

    public function activar($id)
    {
        $row = Projectos::findOrFail($id);
        $valor = ($row->activo) ? 0 : 1;
        $texto = ($row->activo) ? "desactivado" : "activado";

        Projectos::where('id', $row->id)->update(['activo' => $valor]);

        return redirect('admin/proyectos')->with('success', 'proyecto <strong>'.$row->titulo.'</strong> '.$texto.'.');
    }

    public function home($id)
    {
        $row = Projectos::findOrFail($id);
        $valor = ($row->projects) ? 0 : 1;
        $texto = ($row->projects) ? "no se muestra en el portofolio" : "se muestra en el portfolio";

        Projectos::where('id', $row->id)->update(['projects' => $valor]);

        return redirect('admin/proyectos')->with('success', 'Proyecto <strong>'.$row->titulo.'</strong> '.$texto.'.');
    }

    public function borrar($id)
    {
        $row = Projectos::findOrFail($id);

        Projectos::destroy($row->id);

        return redirect('admin/proyectos')->with('success', 'Proyecto <strong>'.$row->titulo.'</strong> borrado');
    }

    public function getSlug($str)
    {
        //Quito acentos y caracteres extraños
        $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë',
            'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø',
            'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å',
            'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò',
            'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā',
            'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č',
            'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę',
            'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ',
            'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ',
            'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ',
            'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ',
            'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ',
            'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ',
            'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů',
            'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż',
            'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ',
            'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ',
            'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ');
        $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E',
            'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O',
            'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a',
            'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o',
            'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A',
            'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C',
            'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E',
            'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H',
            'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I',
            'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L',
            'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n',
            'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r',
            'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't',
            'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u',
            'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z',
            'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I',
            'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U',
            'u', 'A', 'a', 'AE', 'ae', 'O', 'o');
        $sin_acentos = str_replace($a, $b, $str);
        //genero slug
        return mb_strtolower(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), $sin_acentos), 'UTF-8');
    }

}

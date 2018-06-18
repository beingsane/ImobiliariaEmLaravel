<?php

use App\Pagina;
use Illuminate\Database\Seeder;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Página Sobre
        $existe = Pagina::where('tipo', '=', 'sobre')->count();

        if ($existe) {
            $paginaSobre = Pagina::where('tipo', '=', 'sobre')->first();
        } else {
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = "Título da Empresa";
        $paginaSobre->descricao = "Descrição breve sobre a empresa";
        $paginaSobre->texto = "Texto sobre a empresa";
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa= '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14682.45129722063!2d-52.46253585!3d-23.074652!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94929661c8720ce5%3A0x8f6da5f50bf3a4ce!2sShopping+Cidade+Paranava%C3%AD!5e0!3m2!1spt-BR!2sbr!4v1528963196840" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';
        $paginaSobre->tipo = "sobre";

        $paginaSobre->save();
        echo "Página sobre criada com sucesso!";
        

        // Página contato
        $existe = Pagina::where('tipo', '=', 'contato')->count();

        if ($existe) {
            $paginaContato = Pagina::where('tipo', '=', 'contato')->first();
        } else {
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulário";
        $paginaContato->texto = "Contato";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaContato->email = "sj.torres@live.com";
        $paginaContato->tipo = "contato";

        $paginaContato->save();
        echo "Página Contato criada com sucesso!";

    }
}

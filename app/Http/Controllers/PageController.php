<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    private const STATS = [
        ['number' => 100, 'label' => 'Obras Adjudicadas'],
        ['number' => 12, 'label' => 'Obras Concluídas'],
        ['number' => 50, 'label' => 'Colaboradores'],
    ];

    private const SERVICES = [
        'construcao-civil' => [
            'tile' => 'Construção<br>Civil',
            'title' => 'Construção Civil e Obras Públicas',
            'h1' => 'Construção Civil <br>e Obras públicas',
            'image' => 'construcao1-scaled.jpg',
            'hero_image' => 'obraspublicas2-scaled.webp',
            'band_top' => 245,
            'intro' => 'A ZENVYOR é referência em projetos de construção civil e obras públicas, integrando soluções que vão desde instalações técnicas modernas até estações de tratamento de águas residuais e elevatórias. Realizamos remodelações industriais e executamos montagens eletromecânicas com precisão, garantindo obras robustas, seguras e sustentáveis. Cada projeto é planeado com rigor técnico para atender às demandas urbanas e industriais com excelência.',
            'band_image' => 'construcao2-scaled.jpg',
            'band_text' => 'Com vasta experiência no setor, a ZENVYOR desenvolve obras públicas e projetos de construção civil que englobam uma variedade de soluções – desde a implementação de instalações técnicas e estações de tratamento de águas residuais, passando por estações elevatórias e remodelações industriais, até a realização de montagens eletromecânicas. Os nossos projetos são executados com foco em qualidade, eficiência e inovação, contribuindo para o desenvolvimento de infraestruturas modernas e duradouras.',
            'meta' => 'Executamos obras de construção civil com rigor técnico e eficiência. Da fundação ao acabamento, entregamos soluções seguras e sustentáveis.',
        ],
        'energia-solar' => [
            'tile' => 'Energia<br>Solar',
            'title' => 'Energia Solar',
            'h1' => 'Energia<br>Solar',
            'image' => 'solar1-scaled.webp',
            'hero_image' => 'solar1-scaled.webp',
            'band_top' => 245,
            'intro' => 'Na área de Energia Solar, a ZENVYOR transforma a luz do sol em energia limpa por meio de instalações fotovoltaicas de alto desempenho e sistemas de solar térmico. Os nosso serviço abrange o comissionamento detalhado e a operação/manutenção contínua dos sistemas, garantindo máxima eficiência e sustentabilidade, além de reduzir custos energéticos para residências, empresas e indústrias.',
            'band_image' => 'solar2-scaled.jpg',
            'band_text' => 'Oferecendo soluções completas em Energia Solar, a ZENVYOR projeta e instala sistemas fotovoltaicos e de solar térmico, acompanhados por um rigoroso processo de comissionamento e serviços de operação e manutenção. Assim, possibilitamos a conversão eficiente da energia solar, promovendo um ambiente mais sustentável e garantindo um retorno financeiro competitivo para o seu investimento.',
            'meta' => 'Projetamos e instalamos sistemas de energia solar adaptados às suas necessidades. Reduza custos e aposte numa energia mais limpa com a Zenvyor.',
        ],
        'energia-eolica' => [
            'tile' => 'Energias<br>Eólica',
            'title' => 'Energia Eólica',
            'h1' => 'Energia<br>Eólica',
            'image' => 'eolica2-scaled.jpg',
            'hero_image' => 'eolica2-scaled.jpg',
            'band_top' => 245,
            'intro' => 'A ZENVYOR também investe em Energia Eólica, implementando instalações eólicas modernas que convertem a força dos ventos em energia limpa. Com um processo rigoroso de comissionamento e serviços dedicados de operação e manutenção, os nossos projetos garantem alta performance e confiabilidade, contribuindo para um futuro mais sustentável e reduzindo a pegada ambiental.',
            'band_image' => 'eolica1-scaled.jpg',
            'band_text' => 'Especializada em soluções eólicas, a ZENVYOR desenvolve e instala sistemas que aproveitam o potencial dos ventos para gerar energia renovável. Com comissionamento preciso e manutenção contínua, os nossos projetos asseguram eficiência energética e durabilidade, proporcionando uma alternativa sustentável e econômica para o setor industrial e comunitário.',
            'meta' => 'Implementamos soluções em energia eólica para projetos industriais. Reduza a pegada ecológica com geração de energia limpa e confiável.',
        ],
        'avac' => [
            'tile' => 'Aquecimento,<br>Ventilação, Ar<br>Condicionado<br>e Refrigeração',
            'title' => 'AVAC',
            'h1' => 'AVAC (Aquecimento,<br>Ventilação e AC)',
            'image' => 'avac1-scaled.jpg',
            'hero_image' => 'avac1-scaled.jpg',
            'band_top' => 240,
            'intro' => 'Na área de climatização, a ZENVYOR projeta e instala sistemas de ar condicionado, bombas de calor e soluções de refrigeração industrial que garantem conforto térmico e eficiência energética. Os nossos projetos utilizam tecnologias de ponta para criar ambientes agradáveis e produtivos, otimizando o consumo de energia e assegurando desempenho superior em diversas aplicações.',
            'band_image' => 'abac3-scaled.jpg',
            'band_text' => 'A ZENVYOR oferece soluções integradas em Aquecimento, Ventilação, Ar Condicionado e Refrigeração, desenvolvendo projetos que combinam ar condicionado, bombas de calor e sistemas de refrigeração industrial. Com tecnologia avançada e foco na economia energética, os nossos serviços proporcionam ambientes confortáveis e operacionais, atendendo às necessidades de residências, comércios e indústrias com excelência.',
            'meta' => 'Concebemos e instalamos soluções AVAC para conforto térmico e eficiência energética. Sistemas personalizados para ambientes industriais e comerciais.',
        ],
        'electricidade-geral' => [
            'tile' => 'Electricidade<br>Geral',
            'title' => 'Electricidade Geral',
            'h1' => 'Electricidade<br>Geral',
            'image' => 'eletricidadegeral-scaled.jpg',
            'hero_image' => 'eletricidadegeral-scaled.jpg',
            'band_top' => 245,
            'intro' => 'A ZENVYOR oferece soluções completas em Eletricidade Geral, atendendo desde instalações elétricas de baixa tensão para residências e indústrias até a implementação de infraestruturas de telecomunicações (ITED). Complementamos o nosso portfólio com a instalação de postos de carregamento para veículos elétricos, sistemas de videoporteiro e intercomunicadores, além de soluções em domótica, iluminação, alarmes e automatismos – sempre com foco na segurança, eficiência e modernidade.',
            'band_image' => 'eletricista.jpg',
            'band_text' => 'Com um portfólio robusto, a ZENVYOR desenvolve projetos em Eletricidade Geral que abrangem desde a instalação de sistemas elétricos de baixa tensão para ambientes residenciais e industriais até a criação de infraestruturas de telecomunicações (ITED). Os nossos serviços incluem também a implementação de postos de carregamento de veículos elétricos, videoporteiros, intercomunicadores, soluções em domótica para casas inteligentes, iluminação, alarmes e automatismos, garantindo alta performance e conectividade.',
            'meta' => 'Especialistas em eletricidade geral para obras e indústria. Soluções completas e em conformidade com as normas técnicas e de segurança.',
        ],
        'metalomecanica' => [
            'tile' => 'Metalomecânica',
            'title' => 'Metalomecânica',
            'h1' => 'Metalomecânica',
            'image' => 'serrelharia2-scaled.jpg',
            'hero_image' => 'serrelharia2-scaled.jpg',
            'band_top' => 145,
            'intro' => 'Na área de Metalomecânica, a ZENVYOR executa projetos personalizados que englobam serviços de serralharia civil e mecânica e a instalação de tubagens. As nossas soluções unem robustez, design inovador e precisão técnica, garantindo resultados duradouros e de alta qualidade para diversas aplicações no setor industrial e de construção.',
            'band_image' => 'serrelharia-scaled.jpg',
            'band_text' => 'A ZENVYOR desenvolve projetos de Metalomecânica com foco na excelência, oferecendo serviços de serralharia civil e mecânica e soluções completas para tubagens. Utilizando materiais de alta qualidade e técnicas modernas, os nossos projetos são projetados para proporcionar durabilidade, segurança e eficiência, atendendo às demandas mais exigentes do mercado.',
            'meta' => 'Projetamos, fabricamos e montamos estruturas metálicas. Trabalhos de precisão com alta durabilidade para projetos industriais e de engenharia.',
        ],
    ];

    private const GRID_ORDER = [
        'construcao-civil', 'energia-solar', 'energia-eolica',
        'avac', 'electricidade-geral', 'metalomecanica',
    ];

    private const TESTIMONIALS = [
        ['name' => 'João Silva', 'text' => '“Profissionais exemplares, cumpriram todos os prazos e garantiram um resultado de alta qualidade.”'],
        ['name' => 'Mariana Rocha', 'text' => '“A ZENVYOR demonstrou grande experiência e organização. O projeto decorreu tranquilamente.”'],
        ['name' => 'Carlos Matos', 'text' => '“Equipa dedicada, disposta a resolver qualquer imprevisto. Fiquei muito satisfeito com o serviço.”'],
        ['name' => 'Ana Martins', 'text' => '“Serviço impecável, com soluções eficientes e grande cuidado na execução. Voltaria a contratar.”'],
        ['name' => 'Pedro Santos', 'text' => '“Atendimento excelente e resposta rápida, mesmo após a conclusão do projeto.”'],
        ['name' => 'Sofia Gomes', 'text' => '“Profissionais de confiança, sempre atentos aos detalhes e abertos a sugestões.”'],
        ['name' => 'Henrique Oliveira', 'text' => '“Empresa séria e comprometida. Garantiram apoio total do início ao fim da construção.”'],
        ['name' => 'Beatriz Costa', 'text' => '“Excelente comunicação. Mantiveram-me informada sobre cada fase, o que me deu muita segurança.”'],
    ];

    public function home(): View
    {
        return view('pages.home', [
            'title' => 'ZENVYOR | Industrial Solutions',
            'meta' => 'Especialistas em construção civil, energia solar, eólica, AVAC e eletricidade. Soluções industriais completas, eficientes e sustentáveis.',
            'stats' => self::STATS,
            'grid' => $this->grid(),
            'testimonials' => self::TESTIMONIALS,
        ]);
    }

    public function about(): View
    {
        return view('pages.sobre-nos', [
            'title' => 'Sobre Nós | ZENVYOR',
            'meta' => 'Conheça a missão, os valores e a equipa por trás da Zenvyor. Comprometidos com inovação, qualidade e soluções técnicas à medida.',
            'grid' => $this->grid(),
        ]);
    }

    public function services(): View
    {
        return view('pages.servicos', [
            'title' => 'Serviços | ZENVYOR',
            'meta' => 'Descubra os serviços da Zenvyor: construção civil, energia renovável, AVAC, eletricidade e metalomecânica. Conheça soluções à medida do seu projeto.',
            'grid' => $this->grid(),
        ]);
    }

    public function service(string $service): View
    {
        $data = self::SERVICES[$service];
        $data['slug'] = $service;

        return view('pages.servico', [
            'title' => $data['title'] . ' | ZENVYOR',
            'meta' => $data['meta'],
            'service' => $data,
            'stats' => self::STATS,
            'grid' => $this->grid(),
        ]);
    }

    public function contact(): View
    {
        return view('pages.contacto', [
            'title' => 'Contactos | ZENVYOR',
            'meta' => 'Esclareça dúvidas ou solicite orçamento para o seu projeto. A nossa equipa está pronta para ajudar com soluções técnicas e personalizadas.',
        ]);
    }

    public function privacy(): View
    {
        return view('pages.politica-privacidade', [
            'title' => 'Política de Privacidade | ZENVYOR',
        ]);
    }

    public function terms(): View
    {
        return view('pages.termos-condicoes', [
            'title' => 'Termos e Condições | ZENVYOR',
        ]);
    }

    public function cookies(): View
    {
        return view('pages.politica-cookies', [
            'title' => 'Política de Cookies | ZENVYOR',
        ]);
    }

    private function grid(): array
    {
        $grid = [];
        foreach (self::GRID_ORDER as $slug) {
            $grid[$slug] = self::SERVICES[$slug];
        }

        return $grid;
    }
}

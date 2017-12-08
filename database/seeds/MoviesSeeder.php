<?php

use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Movie::create([
            'title'     => 'Deadpool',
            'overview'  => 'Baseado no anti-herói não convencional da Marvel Comics, Deadpool conta a história da origem do ex-agente das Forças Especiais que se tornou o mercenário Wade Wilson. Depois de ser submetido a um desonesto experimento que o deixa com poderes de cura acelerada, Wade adota o alter ego de Deadpool. Armado com suas novas habilidades e um senso de humor negro e distorcido, Deadpool persegue o homem que quase destruiu sua vida.',
            'poster'    => 'https://image.tmdb.org/t/p/w640/g0ehjmoNsgH9RmlGiAfYzN2whps.jpg',
            'year'      => '2016',
            'director'  => 'Tim Miller',
            'genres'    => 'Action',
        ]);
        App\Movie::create([
            'title'     => 'Capitão América: Guerra Civil',
            'overview'  => 'Steve Rogers (Chris Evans) é o atual líder dos Vingadores, super-grupo de heróis formado por Viúva Negra (Scarlett Johansson), Feiticeira Escarlate (Elizabeth Olsen), Visão (Paul Bettany), Falcão (Anthony Mackie) e Máquina de Combate (Don Cheadle). O ataque de Ultron fez com que os políticos buscassem algum meio de controlar os super-heróis, já que seus atos afetam toda a humanidade. Tal decisão coloca o Capitão América em rota de colisão com Tony Stark (Robert Downey Jr.), o Homem de Ferro.',
            'poster'    => 'https://image.tmdb.org/t/p/w640/jAXZMCG9rEXHUvfxTwEYEmO1V4p.jpg',
            'year'      => '2016',
            'director'  => 'Joe Russo',
            'genres'    => 'Action',
        ]);
        App\Movie::create([
            'title'     => 'Liga da Justiça',
            'overview'  => 'Impulsionado pela restauração de sua fé na humanidade e inspirado pelo ato altruísta do Superman (Henry Cavill), Bruce Wayne (Ben Affleck) convoca sua nova aliada Diana Prince (Gal Gadot) para o combate contra um inimigo ainda maior, recém-despertado. Juntos, Batman e Mulher-Maravilha buscam e recrutam com agilidade um time de meta-humanos, mas mesmo com a formação da liga de heróis sem precedentes - Batman, Mulher-Maraviha, Aquaman (Jason Momoa), Cyborg (Ray Fisher) e The Flash (Ezra Miller) -, poderá ser tarde demais para salvar o planeta de um catastrófico ataque.',
            'poster'    => 'https://image.tmdb.org/t/p/w640/geyu6rplpbp7OUeOfB2uRVf1LpG.jpg',
            'year'      => '2017',
            'director'  => 'Zack Snyder',
            'genres'    => 'Action',
        ]);
        App\Movie::create([
            'title'     => 'Batman vs Superman: A Origem da Justiça',
            'overview'  => 'Após sua luta contra o general Zod, Metrópolis foi arrasada e o Superman se tornou a figura mais controversa do mundo. Enquanto para muitos ele continua sendo um símbolo de esperança, um número cada vez maior de pessoas o consideram uma ameaça para a humanidade, procurando justiça para o caos que ele trouxe para a Terra. Até onde Bruce Wayne sabe, Superman é claramente perigoso para a sociedade. Ele teme pelo futuro da humanidade com um poder tão grande sem ser governado, então ele veste sua máscara e capa para corrigir os erros do Superman. A rivalidade entre eles é furiosa, alimentada por amargura e vingança e nada pode convencê-los a não travar essa guerra. No entanto, uma ameaça obscura surge na forma de um terceiro homem: um que tem poder maior do que qualquer um deles para colocar o mundo em perigo e causar destruição total.',
            'poster'    => 'https://image.tmdb.org/t/p/w640/9ORTc9UUTtRq7pssuu5OXNG3W5m.jpg',
            'year'      => '2016',
            'director'  => 'Zack Snyder',
            'genres'    => 'Action',
        ]);
        App\Movie::create([
            'title'     => 'Mulher-Maravilha',
            'overview'  => 'Treinada desde cedo para ser uma guerreira imbatível, Diana Prince (Gal Gadot) nunca saiu da paradisíaca ilha em que é reconhecida como Princesa das Amazonas. Quando o piloto Steve Trevor (Chris Pine) se acidenta e cai numa praia do local, ela descobre que uma guerra sem precedentes está se espalhando pelo mundo e decide deixar seu lar certa de que pode parar o conflito. Lutando para acabar com todas as lutas, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra.',
            'poster'    => 'https://image.tmdb.org/t/p/w640/ujQthWB6c0ojlARk28NSTmqidbF.jpg',
            'year'      => '2017',
            'director'  => 'Patty Jenkins',
            'genres'    => 'Action',
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\back\Kurumsal;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KurumsalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kurumsals = [
            [

                'hakkimizda_tr' => 'Antalya Bilim Üniversitesi Teknoloji Transfer Ofisi (ABUTTO) olarak, üniversitemiz ve işbirliği halinde olduğumuz
                sanayi kuruluşları tarafından yürütülen projelerin bilimsel ve ekonomik bir değere dönüşmesi, üniversite-sanayi birlikteliğinin
                güçlenerek olgunlaşması, ulusal ve uluslararası destek programlarından faydalanılarak, bilgiye dayalı akademik girişimciliğin
                geliştirilmesi, üniversitelerde fikri ve sınai haklar temelinde yenilikçi fikirlerin ticarileştirilmesi hedeflerine yönelik
                olarak faaliyetlerimizi sürdürmekteyiz.
                Ülkemizin Ar-Ge kültürüne ve teknolojik yeteneğine alan açarak akademisyenlerimizin yapmış oldukları
                bilimsel çalışmaların ticari değer taşımasına katkı sağlamak temel prensibimizdir. Fikri ve Sınai Hakların belirlediği
                çerçevede ticarileşme kapasitesi olan yenilikçi fikirlerin kanunen koruma altına alınmasını sağlayarak, gerçekleşebilecek bütün projelerin sağlıklı bir sonuca ermesi stratejik hedeflerimizin gereğidir.
                Üniversite-sanayi işbirliğine yönelik yenilikçi faaliyetlerde bulunmak adına AOSB ile ortak girişimimiz olan
                ve Antalya Organize Sanayi Bölgesinde kurulacak teknoparkın yeni fikirlerin gelişmesi için büyük olanaklar sağlayacağını biliyoruz.
                Bu anlamda özel olarak bölgemizin, genel olarak da ülkemizin sanayi sektörlerinin önceliği gözetilerek doğru fikirler
                üzerinden teknoloji transferi en önemli argümanımızı oluşturmaktadır. Teknoparkımız Türkiye’nin ve bölgemizin uluslararası
                rekabet gücünü artırmak amacıyla, bilimin uygulamaya aktarılmasına en uygun ortamı sağlayıp, sürdürülebilir işbirliği
                esasına dayanan, araştırma, geliştirme ve yenilikçilik aktivitelerinin odak merkezi olacaktır.
                Geleceğin iş insanları, yöneticileri ve akademisyenleri olan öğrencilerimizin sanayi kuruluş
                u temsilcileriyle bir araya gelmesini sağlayarak, iş olanakları, fikirler, farkındalık ve
                nihayetinde kariyer gelişiminde emin adımlarla ilerlemeleri için en iyi olanakları sağlamaya çalışıyoruz.
                ',
                'misyon_tr' => 'Antalya Bilim Üniversitesi Teknoloji Transfer Ofisi (ABUTTO), girişimci ve yenilikçi fikirlerle üniversite
                sanayi işbirliğinin gelişimine katkı sağlamayı, akademik araştırmalara üretim sektörünün ihtiyaçları temelinde
                destek sağlamak amacıyla, inovasyonel bilgi ve teknolojiye dayalı yaklaşımlarla, Ar-Ge projeleri oluşturmayı
                ve geliştirmeyi, patentlenebilir ve ticarileştirilebilir fikir ve ürünlerle yatırımcı ve
                buluşçularla bir arada çalışmayı misyon edinmiştir.',
                'vizyon_tr' => 'Antalya Bilim Üniversitesi Teknoloji Transfer Ofisi (ABUTTO), üniversitelerde üretilen bilimsel birikimi
                sanayi ile buluşturup ülke sanayisinin uluslararası rekabette söz sahibi olmasını, akademisyenlerin sanayi ile
                 işbirliğini yenilikçi düşüncelerle ve fikri mülkiyet hakları
                 temelinde ticarileştirilmesini ve bu anlamda yenilikçiği ve girişimciliği şiar edinerek ülke kalkınmasına katkı sağlamayı vizyon edinmiştir.',


            ]

        ];

        foreach ($kurumsals as $kurumsal) {
            Kurumsal::create($kurumsal);
        }
    }
}

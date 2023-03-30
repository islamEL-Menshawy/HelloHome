<?php

namespace Database\Seeders;

use App\Models\Attribut;
use Illuminate\Database\Seeder;

class PageArSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Attribut::create([
            'title' => 'compound_slider_title_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'اكتشف مجموعتنا الرئيسية'
        ]);
        Attribut::create([
            'title' => 'section_one_title_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'خدمات الضيوف'
        ]);
        Attribut::create([
            'title' => 'section_one_text_one_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'ابحث عن منزلك الجديد'
        ]);
        Attribut::create([
            'title' => 'section_one_text_two_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'اختيار منزل إيجار على فندق فخم'
        ]);
        // section two
        Attribut::create([
            'title' => 'section_two_title_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'خدمات أصحاب المنازل'
        ]);

        Attribut::create([
            'title' => 'section_two_text_one_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'إدارة منزلي!'
        ]);
        Attribut::create([
            'title' => 'section_two_text_two_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'عوائد رائعة وراحة بال تامة'
        ]);

        // section three

        Attribut::create([
            'title' => 'section_three_text_one_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'HELLOHOME في مهمة'
        ]);
        Attribut::create([
            'title' => 'section_three_text_two_ar',
            'page_id' => 1,
            'is_image' => 0,
            'content' => 'لتغيير طريقة الإيجار إلى الأبد وجعلها أسهل وأسرع وأكثر إنسانية.'
        ]);





        // main section
        Attribut::create([
            'title' => 'about_section_main_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'حول HELLOHOME'
        ]);
        Attribut::create([
            'title' => 'about_section_main_sub_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'من نحن'
        ]);


        // section 1
        Attribut::create([
            'title' => 'section_1_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'في HELLOHOME ، نفتح الأبواب'
        ]);
        Attribut::create([
            'title' => 'section_1_sub_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'إلى أرقى المنازل والفيلات في أكثر الوجهات المرغوبة في مصر.'
        ]);
        Attribut::create([
            'title' => 'section_1_text_1_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'نعتقد أن استئجار منزلك الجديد - شقة أو فيلا هو أكثر من مجرد خطوة. إنه شيء أكبر. خطوة إلى الأمام. بداية جديدة. بداية جديدة. سواء كنت تتنقل عبر البلد أو عبر الشارع ، فأنت تستحق أن تحب المكان الذي تهبط فيه.'
        ]);
        Attribut::create([
            'title' => 'section_1_text_2_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'But today’s rental experience is broken. It’s outdated, exhausting, and slow. We spend hours of our lives searching just to settle for places that don’t feel like home. The nightmare ends now.'
        ]);

        //section 2
        Attribut::create([
            'title' => 'section_2_q_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'What Makes Us Different?'
        ]);
        Attribut::create([
            'title' => 'section_2_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'A new way of renting'
        ]);
        Attribut::create([
            'title' => 'section_2_sub_title_1_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'WE COMBINE THE SERVICES OF A HOTEL'
        ]);
        Attribut::create([
            'title' => 'section_2_sub_title_2_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'WITH THE COMFORTS OF HOME!'
        ]);
        Attribut::create([
            'title' => 'section_2_text_1_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'When you book with us, your experience is professionally managed to bring the quality and consistency of a hotel, combined with the comforts of home, to deliver a unique experience that allows our guests the ability to enjoy the best of both worlds.'
        ]);
        Attribut::create([
            'title' => 'section_2_text_2_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'Our goal is to have our residents stay with us as long as possible. That’s why we’re passionate about creating rented homes you can actually make your own, a community that welcomes pets and a space you can meet like-minded people in. We don’t believe in landlords letting themselves in unannounced or preventing you from hanging your favorite photos.'
        ]);

        //section 3
        Attribut::create([
            'title' => 'about_section_3_text_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'We want our tenants to be happy in the homes we let to them. Our experience tells us that happy tenants are good tenants.'
        ]);


        //section 4
        Attribut::create([
            'title' => 'about_section_4_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'Our Mission'
        ]);
        Attribut::create([
            'title' => 'about_section_4_sub_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'HelloHome is on a mission to change the way you rent, forever. To make it easi- er, faster, and more human. By making this vision a reality, we’re creating oppor- tunity for everyone to live better—from one fresh start to the next.'
        ]);
        Attribut::create([
            'title' => 'about_section_4_title_2_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'A local network with local market experts'
        ]);
        Attribut::create([
            'title' => 'about_section_4_sub_title_2_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'For over 15 years now, we have been specialized in the brokerage of premium residential properties.'
        ]);
        Attribut::create([
            'title' => 'about_section_4_title_3_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'Who We Help'
        ]);
        Attribut::create([
            'title' => 'about_section_4_sub_title_3_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'GREAT RESIDENTS FOR GREAT LANDLORDS AND GREAT LANDLORDS FOR GREAT RESIDENTS.'
        ]);

        // section 5
        Attribut::create([
            'title' => 'about_section_5_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'Guest Services'
        ]);

        Attribut::create([
            'title' => 'about_section_5_text_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'By making renting an apartment as easy as booking a hotel. From browsing and touring to apply- ing and signing the lease, the entire process is becoming faster, easier, and more trustworthy on HelloHome.'
        ]);

        // section 6
        Attribut::create([
            'title' => 'about_section_6_title_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'Homes Owner'
        ]);

        Attribut::create([
            'title' => 'about_section_6_text_ar',
            'page_id' => 2,
            'is_image' => 0,
            'content' => 'We provide peace-of-mind, convenience and flexibility to homeowners looking to make the best use out of their homes when they’re away. We have packages to suit all types of landlords, whether you need to find tenants, ensure you’re legally covered and ready to let, or require full management of your property.'
        ]);


        //Services page
        // main section
        Attribut::create([
            'title' => 'service_section_main_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Our Services'
        ]);
        Attribut::create([
            'title' => 'service_section_main_sub_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'ARENTING A NEW HOME IS THE START OF SOMETHING GREAT.'
        ]);


        Attribut::create([
            'title' => 'service_section_1_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Guest Services'
        ]);

        Attribut::create([
            'title' => 'service_section_2_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Homes Owner Services'
        ]);

        Attribut::create([
            'title' => 'service_section_3_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Guests Services'
        ]);
        Attribut::create([
            'title' => 'service_section_3_sub_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Properties Managment'
        ]);
        Attribut::create([
            'title' => 'service_section_3_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Our homes are where we choose to live and where precious memories are made for a lifetime.'
        ]);
        Attribut::create([
            'title' => 'service_section_4_text_1_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We do our best to communicate in every way that guests are booking a home.'
        ]);
        Attribut::create([
            'title' => 'service_section_4_text_2_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'CHOOSING A RENTAL HOME OVER A LUXURY HOTEL'
        ]);


        Attribut::create([
            'title' => 'service_section_5_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'What to expect from us'
        ]);
        Attribut::create([
            'title' => 'service_section_5_text_1_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'At HelloHome, we deliver bespoke services that can make any stay more than memorable.'
        ]);
        Attribut::create([
            'title' => 'service_section_5_text_2_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'By making renting an apartment as easy as booking a hotel. From browsing and touring to apply- ing and signing the lease, the entire process is becoming faster, easier, and more trustworthy on HelloHome.'
        ]);
        Attribut::create([
            'title' => 'service_section_5_text_3_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We don’t believe in landlords letting themselves in unannounced or preventing you from hanging your favorite photos.'
        ]);

        Attribut::create([
            'title' => 'service_section_6_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'ABOUT YOUR EXPERIENCE'
        ]);
        Attribut::create([
            'title' => 'service_section_6_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Your experience is professionally managed to bring the quality and consistency of a hotel, combined with the comforts of home, to deliver a unique experience that allows our guests the ability to enjoy the best of both worlds.'
        ]);


        Attribut::create([
            'title' => 'service_section_7_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'ENJOY THE FINEST HOMES AND SERVICE ALL AROUND THE ALL OVER EGYPT'
        ]);

        Attribut::create([
            'title' => 'service_section_8_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Home Owners Services'
        ]);
        Attribut::create([
            'title' => 'service_section_8_text_1_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'For landlords, we find the right tenant at the right price to rent your property and ensure everything is in place to make for a smooth letting process.'
        ]);
        Attribut::create([
            'title' => 'service_section_8_text_2_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'HelloHome consists of a knowledgeable, experienced team of property specialists that work with tenants and landlords alike, to overcome the obstacles of finding and renting the right property or right tenant to suit you, your circumstances and your aims for the future.'
        ]);
        Attribut::create([
            'title' => 'service_section_9_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We provide peace-of-mind,'
        ]);
        Attribut::create([
            'title' => 'service_section_9_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'convenience and flexibility to homeowners looking to make the best use out of their homes when they’re away.'
        ]);

        Attribut::create([
            'title' => 'service_section_10_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We have packages to suit all types of landlords, whether you need to find tenants, ensure you’re legally covered and ready to let, or require full management of your property.'
        ]);

        Attribut::create([
            'title' => 'service_section_11_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Optimise your rental income'
        ]);
        Attribut::create([
            'title' => 'service_section_11_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We save landlords thousands of pounds in fees and much more. Com- bining extensive expertise in the Egypt property market and modern market- ing methodologies, we consistently maximise properties’ rental value.'
        ]);

        Attribut::create([
            'title' => 'service_section_12_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Let us take care of everything'
        ]);
        Attribut::create([
            'title' => 'service_section_12_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'From property marketing to accompanied viewings, contracting, move-in, and property management, we will take care of all your property needs 24/7 with our awarded team and trusted suppliers.'
        ]);
        Attribut::create([
            'title' => 'service_section_13_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'Find great renters'
        ]);
        Attribut::create([
            'title' => 'service_section_13_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We will introduce your property to thousands of renters that fit your requirements. Our database is comprised of professionals, families and students who are looking for their new short and long-term home.'
        ]);
        Attribut::create([
            'title' => 'service_section_14_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'WITH GREAT ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING'
        ]);



        Attribut::create([
            'title' => 'service_section_15_title_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'WITH GREAT ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING'
        ]);
        Attribut::create([
            'title' => 'service_section_15_text_ar',
            'page_id' => 3,
            'is_image' => 0,
            'content' => 'We tailor a plan specific to your goals while offering a guar- anteed income resulting in a clear and concise objective.'
        ]);

        Attribut::create([
            'title' => 'contact_section_1_title_ar',
            'page_id' => 4,
            'is_image' => 0,
            'content' => 'كيف يمكننا مساعدتك؟'
        ]);
        Attribut::create([
            'title' => 'contact_section_1_text_ar',
            'page_id' => 4,
            'is_image' => 0,
            'content' => 'نحن هنا لمساعدة موظفينا وعملائنا ومجتمعاتنا على تحقيق طموحاتهم. لذا أخبرنا بما أنت مهتم به ، أو ما الذي تبحث عنه ، وسنعاود الاتصال بك قريبًا'
        ]);
        Attribut::create([
            'title' => 'contact_address_ar',
            'page_id' => 4,
            'is_image' => 0,
            'content' => 'فيلا 117 ، شارع الشيخ سعيد طنطاوي ، الحي الأول ، التجمع الخامس ، القاهرة الجديدة ، القاهرة ، مصر'
        ]);
        Attribut::create([
            'title' => 'contact_page_title_ar',
            'page_id' => 4,
            'is_image' => 0,
            'content' => 'اتصل بنا'
        ]);

    }
}

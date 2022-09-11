<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Page;
use App\Models\Attribut;
use App\Models\Images;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = Page::create([
            'page_title' => 'Home'
        ]);
        Attribut::create([
            'title' => 'compound_slider_title',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'Explore Our Home Collection'
        ]);
        Attribut::create([
            'title' => 'section_one_title',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'Guests Services'
        ]);
        Attribut::create([
            'title' => 'section_one_link',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => '/services#1'
        ]);
        Attribut::create([
            'title' => 'section_one_text_one',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'FIND YOUR NEW HOME'
        ]);
        Attribut::create([
            'title' => 'section_one_text_two',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'Choosing a rental home over a luxury hotel'
        ]);
        $image = Images::create([
            'image_path' => '/pages/home_section_one.png'
        ]);
        Attribut::create([
            'title' => 'section_one_image',
            'page_id' => $home->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);
        // section two
        Attribut::create([
            'title' => 'section_two_title',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'Homes Owners Services'
        ]);
        Attribut::create([
            'title' => 'section_two_link',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => '/services#2'
        ]);
        Attribut::create([
            'title' => 'section_two_text_one',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'MANAGE MY HOME !'
        ]);
        Attribut::create([
            'title' => 'section_two_text_two',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'Great returns & complete peace of mind'
        ]);
        Attribut::create([
            'title' => 'section_two_color',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => '#52BA64'
        ]);
        $image = Images::create([
            'image_path' => '/pages/home_section_two.png'
        ]);
        Attribut::create([
            'title' => 'section_two_image',
            'page_id' => $home->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);
        // section three
        Attribut::create([
            'title' => 'section_three_link',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => '/services#2'
        ]);
        Attribut::create([
            'title' => 'section_three_text_one',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'HELLOHOME IS ON A MISSION'
        ]);
        Attribut::create([
            'title' => 'section_three_text_two',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => 'To change the way you rent forever & to make it easier,faster and more human.'
        ]);
        Attribut::create([
            'title' => 'section_three_color',
            'page_id' => $home->id,
            'is_image' => 0,
            'content' => '#F09337'
        ]);
        $image = Images::create([
            'image_path' => '/pages/home_section_three.png'
        ]);
        Attribut::create([
            'title' => 'section_three_image',
            'page_id' => $home->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);


        $about = Page::create([
            'page_title' => 'About us'
        ]);
        // main section
        Attribut::create([
            'title' => 'about_section_main_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'ABOUT HELLOHOME'
        ]);
        Attribut::create([
            'title' => 'about_section_main_sub_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'WHO WE ARE'
        ]);
        $image = Images::create([
            'image_path' => '/pages/about.png'
        ]);
        Attribut::create([
            'title' => 'about_section_main_image',
            'page_id' => $about->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);

        // section 1
        Attribut::create([
            'title' => 'section_1_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'AT HELLOHOME, WE OPEN DOORS'
        ]);
        Attribut::create([
            'title' => 'section_1_sub_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'TO THE FINEST HOMES AND VILLAS IN THE MOST DESIRABLE DESTINATIONS IN EGYPT.'
        ]);
        Attribut::create([
            'title' => 'section_1_text_1',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'We believe renting your new home - apartment or villa is more than just a move. It’s something bigger. A step forward. A new beginning. A fresh start. Whether you’re moving across the country or across the street, you deserve to love where you land.'
        ]);
        Attribut::create([
            'title' => 'section_1_text_2',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'But today’s rental experience is broken. It’s outdated, exhausting, and slow. We spend hours of our lives searching just to settle for places that don’t feel like home. The nightmare ends now.'
        ]);

        //section 2
        Attribut::create([
            'title' => 'section_2_q',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'What Makes Us Different?'
        ]);
        Attribut::create([
            'title' => 'section_2_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'A new way of renting'
        ]);
        Attribut::create([
            'title' => 'section_2_sub_title_1',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'WE COMBINE THE SERVICES OF A HOTEL'
        ]);
        Attribut::create([
            'title' => 'section_2_sub_title_2',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'WITH THE COMFORTS OF HOME!'
        ]);
        Attribut::create([
            'title' => 'section_2_text_1',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'When you book with us, your experience is professionally managed to bring the quality and consistency of a hotel, combined with the comforts of home, to deliver a unique experience that allows our guests the ability to enjoy the best of both worlds.'
        ]);
        Attribut::create([
            'title' => 'section_2_text_2',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'Our goal is to have our residents stay with us as long as possible. That’s why we’re passionate about creating rented homes you can actually make your own, a community that welcomes pets and a space you can meet like-minded people in. We don’t believe in landlords letting themselves in unannounced or preventing you from hanging your favorite photos.'
        ]);

        //section 3
        Attribut::create([
            'title' => 'about_section_3_text',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'We want our tenants to be happy in the homes we let to them. Our experience tells us that happy tenants are good tenants.'
        ]);

        Attribut::create([
            'title' => 'about_section_3_color',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => '#F08B66'
        ]);
        $image = Images::create([
            'image_path' => '/pages/about_section_3.png'
        ]);
        Attribut::create([
            'title' => 'about_section_3_image',
            'page_id' => $about->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);
        //section 4
        Attribut::create([
            'title' => 'about_section_4_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'Our Mission'
        ]);
        Attribut::create([
            'title' => 'about_section_4_sub_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'HelloHome is on a mission to change the way you rent, forever. To make it easi- er, faster, and more human. By making this vision a reality, we’re creating oppor- tunity for everyone to live better—from one fresh start to the next.'
        ]);
        Attribut::create([
            'title' => 'about_section_4_title_2',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'A local network with local market experts'
        ]);
        Attribut::create([
            'title' => 'about_section_4_sub_title_2',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'For over 15 years now, we have been specialized in the brokerage of premium residential properties.'
        ]);
        Attribut::create([
            'title' => 'about_section_4_title_3',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'Who We Help'
        ]);
        Attribut::create([
            'title' => 'about_section_4_sub_title_3',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'GREAT RESIDENTS FOR GREAT LANDLORDS AND GREAT LANDLORDS FOR GREAT RESIDENTS.'
        ]);

        // section 5
        Attribut::create([
            'title' => 'about_section_5_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'Guest Services'
        ]);Attribut::create([
            'title' => 'about_section_5_color',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => '#F09337'
        ]);
        Attribut::create([
            'title' => 'about_section_5_text',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'By making renting an apartment as easy as booking a hotel. From browsing and touring to apply- ing and signing the lease, the entire process is becoming faster, easier, and more trustworthy on HelloHome.'
        ]);
        $image = Images::create([
            'image_path' => '/pages/about_section_5.png'
        ]);
        Attribut::create([
            'title' => 'about_section_5_image',
            'page_id' => $about->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);
        // section 6
        Attribut::create([
            'title' => 'about_section_6_title',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'Homes Owner'
        ]);Attribut::create([
        'title' => 'section_6_color',
        'page_id' => $about->id,
        'is_image' => 0,
        'content' => '#52BA64'
    ]);
        Attribut::create([
            'title' => 'about_section_6_text',
            'page_id' => $about->id,
            'is_image' => 0,
            'content' => 'We provide peace-of-mind, convenience and flexibility to homeowners looking to make the best use out of their homes when they’re away. We have packages to suit all types of landlords, whether you need to find tenants, ensure you’re legally covered and ready to let, or require full management of your property.'
        ]);
        $image = Images::create([
            'image_path' => '/pages/about_section_5.png'
        ]);
        Attribut::create([
            'title' => 'section_6_image',
            'page_id' => $about->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);

        //Services page
        $service = Page::create([
            'page_title' => 'Service'
        ]);
        // main section
        Attribut::create([
            'title' => 'service_section_main_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Our Services'
        ]);
        Attribut::create([
            'title' => 'service_section_main_sub_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'ARENTING A NEW HOME IS THE START OF SOMETHING GREAT.'
        ]);
        $image = Images::create([
            'image_path' => '/pages/service.png'
        ]);
        Attribut::create([
            'title' => 'service_section_main_image',
            'page_id' => $service->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);

        Attribut::create([
            'title' => 'service_section_1_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Guest Services'
        ]);
        Attribut::create([
            'title' => 'service_section_1_color',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => '#C97A2C'
        ]);

        Attribut::create([
            'title' => 'service_section_2_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Homes Owner Services'
        ]);
        Attribut::create([
            'title' => 'service_section_2_color',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => '#52BA64'
        ]);
        Attribut::create([
            'title' => 'service_section_3_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Guests Services'
        ]);
        Attribut::create([
            'title' => 'service_section_3_sub_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Properties Managment'
        ]);
        Attribut::create([
            'title' => 'service_section_3_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Our homes are where we choose to live and where precious memories are made for a lifetime.'
        ]);
        Attribut::create([
            'title' => 'service_section_4_text_1',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We do our best to communicate in every way that guests are booking a home.'
        ]);
        Attribut::create([
            'title' => 'service_section_4_text_2',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'CHOOSING A RENTAL HOME OVER A LUXURY HOTEL'
        ]);
        Attribut::create([
            'title' => 'service_section_4_color',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => '#C97A2C'
        ]);

//        $image = Images::create([
//            'image_path' => '/pages/service.png'
//        ]);
//        Attribut::create([
//            'title' => 'section_4_image',
//            'page_id' => $service->id,
//            'is_image' => 1,
//            'image_id' => $image->id
//        ]);
        Attribut::create([
            'title' => 'service_section_5_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'What to expect from us'
        ]);
        Attribut::create([
            'title' => 'service_section_5_text_1',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'At HelloHome, we deliver bespoke services that can make any stay more than memorable.'
        ]);
        Attribut::create([
            'title' => 'service_section_5_text_2',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'By making renting an apartment as easy as booking a hotel. From browsing and touring to apply- ing and signing the lease, the entire process is becoming faster, easier, and more trustworthy on HelloHome.'
        ]);
        Attribut::create([
            'title' => 'service_section_5_text_3',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We don’t believe in landlords letting themselves in unannounced or preventing you from hanging your favorite photos.'
        ]);

        Attribut::create([
            'title' => 'service_section_6_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'ABOUT YOUR EXPERIENCE'
        ]);
        Attribut::create([
            'title' => 'service_section_6_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Your experience is professionally managed to bring the quality and consistency of a hotel, combined with the comforts of home, to deliver a unique experience that allows our guests the ability to enjoy the best of both worlds.'
        ]);

        $image = Images::create([
            'image_path' => '/pages/service_section_6.png'
        ]);
        Attribut::create([
            'title' => 'service_section_6_image',
            'page_id' => $service->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);

        Attribut::create([
            'title' => 'service_section_7_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'ENJOY THE FINEST HOMES AND SERVICE ALL AROUND THE ALL OVER EGYPT'
        ]);

        Attribut::create([
            'title' => 'service_section_8_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Home Owners Services'
        ]);
        Attribut::create([
            'title' => 'service_section_8_text_1',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'For landlords, we find the right tenant at the right price to rent your property and ensure everything is in place to make for a smooth letting process.'
        ]);
        Attribut::create([
            'title' => 'service_section_8_text_2',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'HelloHome consists of a knowledgeable, experienced team of property specialists that work with tenants and landlords alike, to overcome the obstacles of finding and renting the right property or right tenant to suit you, your circumstances and your aims for the future.'
        ]);
        Attribut::create([
            'title' => 'service_section_9_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We provide peace-of-mind,'
        ]);
        Attribut::create([
            'title' => 'service_section_9_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'convenience and flexibility to homeowners looking to make the best use out of their homes when they’re away.'
        ]);
        Attribut::create([
            'title' => 'service_section_9_color',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => '#52BA64'
        ]);
        $image = Images::create([
            'image_path' => '/pages/service_section_9.png'
        ]);
        Attribut::create([
            'title' => 'service_section_9_image',
            'page_id' => $service->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);
        Attribut::create([
            'title' => 'service_section_10_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We have packages to suit all types of landlords, whether you need to find tenants, ensure you’re legally covered and ready to let, or require full management of your property.'
        ]);

        Attribut::create([
            'title' => 'service_section_11_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Optimise your rental income'
        ]);
        Attribut::create([
            'title' => 'service_section_11_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We save landlords thousands of pounds in fees and much more. Com- bining extensive expertise in the Egypt property market and modern market- ing methodologies, we consistently maximise properties’ rental value.'
        ]);

        Attribut::create([
            'title' => 'service_section_12_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Let us take care of everything'
        ]);
        Attribut::create([
            'title' => 'service_section_12_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'From property marketing to accompanied viewings, contracting, move-in, and property management, we will take care of all your property needs 24/7 with our awarded team and trusted suppliers.'
        ]);
        Attribut::create([
            'title' => 'service_section_13_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'Find great renters'
        ]);
        Attribut::create([
            'title' => 'service_section_13_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We will introduce your property to thousands of renters that fit your requirements. Our database is comprised of professionals, families and students who are looking for their new short and long-term home.'
        ]);
        Attribut::create([
            'title' => 'service_section_14_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'WITH GREAT ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING'
        ]);
        Attribut::create([
            'title' => 'service_section_14_color',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => '#6D63B7'
        ]);

        $image = Images::create([
            'image_path' => '/pages/service_section_14.png'
        ]);
        Attribut::create([
            'title' => 'service_section_14_image',
            'page_id' => $service->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);
        Attribut::create([
            'title' => 'service_section_15_title',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'WITH GREAT ATTENTION TO DETAIL, WE TAKE CARE OF EVERYTHING'
        ]);
        Attribut::create([
            'title' => 'service_section_15_text',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => 'We tailor a plan specific to your goals while offering a guar- anteed income resulting in a clear and concise objective.'
        ]);
        Attribut::create([
            'title' => 'service_section_15_color',
            'page_id' => $service->id,
            'is_image' => 0,
            'content' => '#1A5C25'
        ]);

        $image = Images::create([
            'image_path' => '/pages/service_section_15.png'
        ]);
        Attribut::create([
            'title' => 'service_section_15_image',
            'page_id' => $service->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);

        $contact = Page::create([
            'page_title' => 'Contact Us'
        ]);
        $image = Images::create([
            'image_path' => '/pages/contact-img.png'
        ]);
        Attribut::create([
            'title' => 'main_image',
            'page_id' => $contact->id,
            'is_image' => 1,
            'image_id' => $image->id
        ]);

        Attribut::create([
            'title' => 'contact_section_1_title',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => 'HOW CAN WE HELP YOU?'
        ]);
        Attribut::create([
            'title' => 'contact_section_1_text',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => 'We’re here to help our people, our clients, and our communities achieve their ambitions. So let us know what you’re interested in, or what you’re looking for, and we’ll get back to you shortly'
        ]);
        Attribut::create([
            'title' => 'contact_address',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => 'Villa 117, Shiekh Said Tantawy St, District 1, 5thSettlement, New Cairo, Cairo, Egypt'
        ]);
        Attribut::create([
            'title' => 'contact_phone_1',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => '+2 2 5636 494'
        ]);
        Attribut::create([
            'title' => 'contact_page_title',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => 'CONTACT US'
        ]);
        Attribut::create([
            'title' => 'contact_phone_2',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => '+20 120 200 0043'
        ]);
        Attribut::create([
            'title' => 'contact_email',
            'page_id' => $contact->id,
            'is_image' => 0,
            'content' => 'info@hhegypt.com'
        ]);
















    }
}

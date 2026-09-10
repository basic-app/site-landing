<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\SiteLanding\Database\Seeds;

use BasicApp\Core\Seeder;

class DemoSeeder extends Seeder
{
    public function run()
    {
        service('settings')->setMany([
            'SiteHero.title' => 'Welcome to Basic App',
            'SiteHero.description' => 'A functional Bootstrap 5 boilerplate for one page scrolling websites',
            'SiteAbout.title' => 'About Us',
            'SiteAbout.content_html' => '<p>This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs!</p>',
            'SiteServices.title' => 'Our Services',
            'SiteServices.content_html' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>',
            'SiteContactUs.title' => 'Contact us',
            'SiteContactUs.content_html' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>',
            'SiteSettings.name' => 'Demo',
            'SiteSettings.title' => 'Title',
            'SiteSettings.keywords' => 'Keywords',
            'SiteSettings.description' => 'Description',
            'SiteSettings.copyright' => '@My Company {Y}'
        ]);
    }
}

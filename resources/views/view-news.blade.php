@extends('partial.app')
{{--@section('title', $attributes['contact_page_title_'. app()->getLocale()])--}}
@section('title', 'News')
@section('main-style')
    <link rel="stylesheet" href="{{ asset('assets/content/css/news.css') }}" />
@endsection
@section('content')
    <div class="news pt-2">
        <div class="container">
            <div class="news-container">
                <div class="news-wrapper">
                    <div class="view-article-header">
                        <img
                            src="https://magazine.realtor/sites/default/files/styles/asset_image_teaser/public/assets/images/2003_DN_LosAngeles.jpg?itok=hpEJXyRa"
                            class="img-fluid" alt="" />
                    </div>
                    <div class="news-main-title">How to Address Problem Vacancies in Your Neighborhood
                    </div>
                    <div class="article-line"></div>
                    <div class="news-socialmedia">
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-instagram icon"></i>
                        </a>
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-facebook-f icon"></i>
                        </a>
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-youtube icon"></i>
                        </a>
                        <a href="#" target="_blank" class="news-social-icon">
                            <i class="fab fa-linkedin-in icon"></i>
                        </a>
{{--                        <button target="_blank" class="news-social-icon">--}}
{{--                            <span class="icon-printer icon"></span>--}}
{{--                        </button>--}}
                    </div>
                    <div class="view-article-date-name">
                        <div class="article-date">May 19, 2021 <span class="ml-3 mr-3">|</span> Catherine Mesick</div>
                    </div>
                    <div class="news-main-text">
                        There’s a great deal cities can do right now to address the vacant, abandoned, and deteriorated properties
                        that are contributing to lower property values and economic hardship in their most vulnerable
                        neighborhoods, said a panel of community revitalization experts on Tuesday. The panelists presented at the
                        National Association of REALTORS®’ webinar “Engaging the Community to Develop Equitable Solutions,” part
                        of the association’s Transforming Neighborhoods webinar series. The speakers offered examples of
                        community-led, equity-centered revitalization projects that had been successfully launched in their own
                        city, creating positive impacts on residents’ health and economic wellness.
                        <br />
                        <br />
                        Vacant, abandoned, and deteriorated buildings are currently costing the West Dayton area of Dayton, Ohio,
                        millions in lost revenue, said Fred Holley, a community leader for more than 50 years and vice president
                        of the Salem Avenue Peace Corridor, an organization dedicated to promoting the prosperity of neighborhoods
                        and businesses along Salem Avenue in Dayton. A recent study estimated that problem vacancies within a
                        one-mile radius of Salem Avenue and its surrounding neighborhoods are costing the area $40 million in lost
                        retail revenue, Holley stated. If that radius is expanded to three miles, the disparity grows even worse,
                        he said, resulting in an estimated $300 million loss in retail revenue, which includes lost income from
                        health care services, grocery stores and other shops, and food, recreation, and entertainment. And the
                        potential for business expansion is there. “28,000 commuters travel along that corridor every day,” said
                        Holley. “That’s a lot of opportunity.”
                        <br />
                        <br />
                        The Gem City Market is a prime example of how redeveloping a vacant lot can transform a neighborhood,
                        stated Holley, who is also the market’s treasurer. The market took six years and $5 million in funds to
                        develop, Holley said, and its purpose was to offset a food desert in west and northwest Dayton. The market
                        currently operates as a co-op, and customers can purchase memberships—but membership isn’t required, and
                        anyone can shop there. The purpose of the membership fee is to create a source of funds for operation,
                        Holley said, adding that exclusivity would defeat the entire purpose of the market, whose grand opening
                        was attended by hundreds of people. “What excited people more than anything else was that they wouldn’t
                        have to travel 20 to 30 miles to get groceries,” he said.
                        <br />
                        <br />
                        Holley also outlined the principles that guide the work of the Endangered Properties Program that he
                        chairs, which is operated by Preservation Dayton, Inc., a 501(c)(3) corporation dedicated to restoring and
                        rehabilitating the city’s historic properties. Stabilization solutions for an at-risk property include:
                        <br />
                        <br />
                        Identifying and resolving legal, title, tax, and lien issues
                        Identifying and documenting stabilization requirements
                        Soliciting and screening stabilization contractors, developers, and partners
                        Turning over marketing of the stabilized property to a marketing team, REALTOR®, or owner.
                        The marketing aspect is just as important as the other steps, Holley said, and highlights the need for
                        community partners in revitalization efforts, as well as the value of listening to community stakeholders.
                        “We need people who are committed,” said Holley. “People who are willing to balance the scales for all the
                        neighborhoods.”
                        <br />
                        <br />
                        Kathy Guillaume-Delemar, director of national partnerships for the Center for Community Progress, a
                        nonprofit focused on eliminating vacancies and a partner with NAR in the Transforming Neighborhoods
                        webinar series, seconded Holley’s advice on community involvement. “Relationships lead to results,” said
                        Guillaume-Delemar.
                        <br />
                        <br />
                        Carlton Jackson, CEO of the Dayton REALTORS®, also shared his association’s results from a technical
                        assessment provided by the Transforming Neighborhoods program and noted that his members are eager to
                        effect change in their community. “Our REALTORS® are ready to roll up their sleeves and get to work,” said
                        Jackson.

                        The next Transforming Neighborhoods webinar will be held on June 15. Register here.
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

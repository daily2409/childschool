@extends('Home.Layout.Master')
@section('title')
    Trường mầm non hàng đầu thế giới
@endsection
@section('content')
<div class="design-row">
    <div class="design-column margin-top percent60">
        <div class="column-content border-right p7ehc-1">
            <!--SMILEY TITLE-->
            <div class="design-row titlePage no-shadow">
                <div class="design-column no-padding percent20 p7ehc-2">
                    <img src="landing/images/img/smile1.png" alt="Smartkids Childcare" width="100" height="95" class="scalable displayed" title="Smartkids Childcare"/>
                </div>
                <div class="design-column percent80 p7ehc-2 spacer">
                    <div class="column-content small-padding">
                        <h1>{!!$data->name!!}</h1>
                    </div>
                </div>
            </div>
            <!--MAIN CONTENT C'TND-->
            @foreach ($collection as $item)

            @endforeach
            <p>SmartKids offers a play-based curriculum for young children from 18 months till 6 years old in three different groups.</p>
            <p> Additionally SmartKids offers After School Activities for children from 3,5 years in English as separate classes.</p>
            <h2>Kiddies – Pre-School – for children from 18 months - 3.5 years</h2>
            <div class="design-row no-shadow">
                <div class="design-column no-padding percent20">
                    <p><img src="landing/images/img/smile2.png" alt="Smartkids Childcare" width="150" height="95" class="scalable displayed" title="Smartkids Childcare"/></p>
                </div>
                <div class="design-column percent80 spacer">
                    <div class="column-content small-padding">
                        <p>Your child&rsquo;s first school experience should be the beginning of a successful learning journey. Our foreign experienced and qualified teachers offer a positive, exciting and playful learning environment and a North European play-based curriculum (addressing the total development of a child – Holistic approach) with a strong focus on the individual child. At this stage a strong focus lies on Social Emotional development, Motor skills Development, Creativity and Self- Expression. </p>
                        <p> We offer flexible programs with a minimum of 3 mornings up to full days programs. Each group has a maximum of 18 children, 1 foreign early childhood specialist and 3 assistants.</p>
                    </div>
                </div>
            </div>

            <h2>Big Kids - Kindergarten - for children from 3.5 - 6 years old</h2>
            <div class="design-row no-shadow">
                <div class="design-column no-padding percent20">
                    <p><img src="landing/images/img/smile3.png" alt="Smartkids Childcare" width="131" height="95" class="scalable displayed" title="Smartkids Childcare"/></p>
                </div>
                <div class="design-column percent80 spacer">
                    <div class="column-content small-padding">
                        <p>The&nbsp;kindergarten groups continue their focus on developing strong, independent learners through an enquiry-based learning style. It is our general objective to create a framework which favours the development, well-being, and independence of children and is responding to the child&rsquo;s interest and creativity (emergent curriculum). We monitor each child&rsquo;s individual progress and prepare children to be ready to enter international primary schools. </p>
                        <p> We offer flexible programs with a minimum of 5 mornings till5 full day programs with the possibility of extending the day with afterschool activities. The groups have a maximum of 18 children.</p>
                    </div>
                </div>
            </div>

            <h2 class="blueBG"> After School Activities - for children from 3,5 to 6 years old</h2>
            <div class="design-row no-shadow">
                <div class="design-column no-padding percent20">
                    <p><img src="landing/images/img/smile4.png" alt="Smartkids Childcare" width="113" height="95" class="scalable displayed" title="Smartkids Childcare"/></p>
                </div>
            <div class="design-column percent80 spacer">
                <div class="column-content small-padding">
                    <p> We are committed to the whole development of the child, addressing children&rsquo;s social, physical, emotional and cultural needs with equal importance to their academic needs. Our After School Activities Program allows children to explore their talents and enhance their creative development.</p>
                    <p> Available Every Tuesday, and Thursday. Participation once a week is possible. The groups have a maximum of 18 children and are led by our own, foreign teachers.</p>
                    <p><a href="downloads/AfterSchoolActivities.pdf" target="_blank"> After School Activities - PDF</a></p>
                </div>
            </div>
        </div>

        <h2 class="blueBG">Playgroup</h2>
        <div class="design-row no-shadow">
            <div class="design-column no-padding percent20">
                <p><img src="landing/images/img/smile5.png" alt="Smartkids Childcare" width="116" height="85" class="scalable displayed" title="Smartkids Childcare"/></p>
            </div>
            <div class="design-column percent80 spacer">
                <div class="column-content small-padding">
                    <p>Come play, enjoy and socialize at our FREE SmartKids Playgroup. Children from 12 months to 3 years old are welcomed at this playgroup with a parent or caregiver.</p>
                    <p>The playgroup is suitable for children who are not yet old enough for preschool but are ready to explore an environment away from home and interact with other children. Each 90-minute session includes free play in our child-friendly facility/playground, offering indoor and outdoor play, crafts, fine motor activities and sensory play.</p>
                    <p><a href="downloads/Playgroup.pdf" target="_blank">Playgroup - PDF</a></p>
                </div>
            </div>
        </div>

        <h2 class="blueBG">English Language Centres </h2>
        <div class="design-row no-shadow">
            <div class="design-column no-padding percent20">
                <p><img src="landing/images/img/smile6.png" alt="Smartkids Childcare" width="100" height="95" class="scalable displayed" title="Smartkids Childcare"/></p>
            </div>
            <div class="design-column percent80 spacer">
                <div class="column-content small-padding">
                    <p>The SmartKids Playful-English© afterschool language classes are carefully prepared to combine playful learning with fun-activities in a stimulating environment where children learn English with the same ease as they pick-up their mother-tongue.</p>
                    <p> The Playful-English© course (SuperTots 3-6 years) provides a solid base for even the youngest children learning English for the first time. </p>
                    <p> The program offers your child 16 weeks long - twice a week a 1.5 hour of &ldquo;edutainment&rdquo; - playing and socializing with other children- while learning English through games, songs, rhymes and stories. Through these activities the children strengthen their speaking, pronunciation and pre-reading skills and obtain an excitement for the language.</p>
                    <p><a href="https://www.smartkids.edu.vn" target="_blank"> www.smartkids.edu.vn</a></p>
                </div>
            </div>
        </div>

        </div>
        </div>
        <div class="design-column margin-top percent40">
        <div class="column-content p7ehc-1">
        <h2>SmartKids Downloads </h2>
        <ul class="megalist">
            <li><a href="downloads/EarlyLearningGoalsPlay.pdf" target="_blank">Early Learning Goals</a></li>
            <li><a href="downloads/IndividualCareBook.pdf" target="_blank">Individualized Childcare &amp; Parenting</a></li>
            <li><a href="downloads/ParentHandbook.pdf" target="_blank">Parent Handbook</a></li>
            <li><a href="downloads/FlyerSmartKids.pdf" target="_blank">SmartKids Flyer</a></li>
            <li><a href="downloads/Smartkids Calendar 2020-2021.pdf" target="_blank">School Calendar 2020 - 2021</a></li>
        </ul>
        <p><img src="landing/images/img/childs.jpg" alt="Childcare Ho Chi Minh City" width="410" height="600" title="Childcare Ho Chi Minh City"/> </p>
        <h2><span class="padded-top">Connect to us</span></h2>
        <div id="share-buttons">
            <a href="https://www.facebook.com/people/SmartKids-Vietnam/1811363897" target="_blank"><img src="landing/images/logo/fb.png" alt="Follow us on Facebook" width="47" height="47" title="Follow us on Facebook"/></a>
            <a href="mailto:enquiry@smartkidsinfo.com"><img src="landing/images/logo/email.png" alt="Mail SmartKids" width="47" height="47" title="Mail SmartKids"/></a>
        </div>
    </div>
</div>
@endsection

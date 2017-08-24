<?php include("header.php"); ?>
<style type="text/css">

    .task{
        background: rgba(255, 153, 2, 0.14);
        border: 2px solid rgba(255, 61, 0, 0.48);
        border-radius: 10px;
        padding: 10px;
        margin: 10px;
    }
    .task ul{
        list-style: none;
    }
    .task-title{
        color: #27a84d;
        font-weight: bold;
        font-size: 16px;
        padding-bottom: 10px;
    }
    .task-body{
        margin-left: 35px;
    }
    .codeWithLatex{ 
        padding: 15px;
        background: #fffcf4;
        box-shadow: 5px 0px 5px 3px #FF9800;
        margin-bottom: 25px;
    }
    .paddingLeft30px{
        padding-left: 30px !important;
        margin: 5px;
    }
    .question_section{
        margin-bottom: 10px;
        border: 1px dotted #27a84d;
        padding: 10px;
    }
    .number{
        font-weight: bold;
        color: #673AB7;
        padding: 10px;
    }
    .sidenote{
        margin: 10px;
    }
    .bdedu_activity{
        background-color: #99CCCC;
        padding: 20px;
        margin-top: 20px; 
        border: 2px solid blue;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    .latexCode{
        padding-left: 5px; padding-right: 5px;
    }
    .math_code{
        float: left;
        border: 2px solid rgb(255, 255, 255);
        margin-bottom: 25px;
        min-height: 230px;
        padding: 10px;
        box-shadow: 0px 1px 9px 3px #928f8f;
        width: 100%;
    }

    .math_box{
        margin-bottom: 25px;
        background: #eee; 
        padding: 10px; 
        border: 2px solid green !important;

    }
    .activity_box{
        margin-bottom: 25px;
        background: #eee;
        padding: 10px;
        border: 5px solid rgba(193, 193, 193, 0.34) !important;
        border-radius: 5px;
        min-height: 340px;
    }
    .math_box_title{
        font-size: 16px;
        font-weight: bold;
        color: green;
        padding-left: 15px;
    }
</style>

<div class="main-content-tabs col-xs-12">
    <div class="book-content">
        <div  id="part1" class="parts part1 withsidenote">
            <div class="main-frame-container">
                <center><img src="images/class_6_math_chapter_2_coverphoto.png" width="auto" title="" alt=""></center>
            </div>
        </div>

        <div id="part2" class="parts part2">
            <div class="main-frame-container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 style="margin-top: 10px; color:#13007C"> Ratio and Percentages</h2>
                        <p align="justify"> We come across ratio and percentages quite often in our daily lives. We use them to compare different quantities. A very good example would be speed which is the ratio of the distance travelled per unit time. On the other hand, percentages are simply a convenient way of expressing fractions or decimals. We use percentages in discounts, tax, commision rate of interest, profit and loss calculations etc.
                        </p> 
                        <center><img src="images/class_6_math_fraction.png" width="auto" title="" alt="" style="padding: 10px; height: 200px">
                            <p class="caption" style="text-align: center !important"><span class="title">Figure 2.1.1: </span>Relationship between fraction, percentage and decimal</p>  
                        </center>
                    </div>
                </div>
            </div>
        </div>


        <div id="part3" class="parts part3 withsidenote">
            <button class="btn btn-primary btn-xs sidenote">Sidenote</button>
            <div class="main-frame-container"> 
                <div class="col-md-12">
                    <h2 style="margin-top: 10px; color:#13007C">Ratio</h2>
                    <p>  We use ratios to make comparisons between two things. When we express ratios in words, we use the word “<span style="color: green; font-weight: bold;">to</span>” - we say “<span style="color: green; font-weight: bold;">the ratio of something to something else</span>”. Ratios can be written in several different ways; like fraction, using the word “<span style="color: green; font-weight: bold;">to</span>”, or with a colon. Suppose we want to write the ratio of 3 and 4. We can write this as 3:4 or as a fraction <span lang="latex">\frac{3}{4}</span>   , and we say the ratio is <span style="color: green; font-weight: bold;">three to four.</span></p>
                    <p>
                        Let's use the illustration of shapes given below to learn more about ratios. How can we write the ratio of this number squares to the number of circles? The most common way to write a ratio is as a fraction,  <span lang="latex">\frac{3}{6}</span>    . We could also write it using the word “to”, as “3 to 6”. Finally, we could write this ratio using a colon between the two numbers, 3:6. Be sure you understand that these are all ways to write the same number.
                    </p>
                </div> 
                <div class="row">
                    <div class="col-md-6">                                                                                                             
                        We can count ratios in differant ways. for example
                        <div class="paddingLeft30px"> <span lang="latex">$\bullet$</span> Ratio of squares to circles is <span lang="latex">\frac{3}{6}</span> </div>
                        <div class="paddingLeft30px"> <span lang="latex">$\bullet$</span> Ratio of squares to circles is 3 to 6</div>
                        <div class="paddingLeft30px"> <span lang="latex">$\bullet$</span> Ratio of squares to circles is 3 : 6</div>
                    </div>

                    <div class="col-md-6">

                        <center>
                            <img class="img img-responsive" src="images/class_6_math_ratio.png" style="width:auto; height: 200px">
                            <span class="caption"><span class="title">Figure 11.3.1 </span>Lever</span>
                        </center>
                    </div> 
                </div>

                <div class="row bdedu_activity">
                    <div class="" style="padding: 20px; margin: 10px">
                        <div class="col-sm-12 ">
                            Activity:
                            1.	Find the ratio of the number of boys to girls in your class.
                            2.	Find the ratio of the number of students to teachers in your school.
                        </div> 
                    </div>
                </div> 
                <div class="row">

                    <div class="col-sm-12 text-justify">
                        There are still other ways to make the same comparison, by using equal ratios. To find an equal ratio, you can either multiply or divide each term in the ratio by the same number (but not zero). For example, if we divide both terms in the ratio 3 : 6 by the number 3, then we get the equal ratio, 1 : 2. Do you see that these ratios both represent the same comparison?
                    </div>
                </div>


            </div>

            <div class="sidenote-container">
                <div class="sidenote-content" style="margin: 0 auto">
                    <p class="text-justify" style="margin-top:50%"><strong>  
                            A ratio is the comparison of two or more numbers<br><br><br>
                            Ratios are always unitless, as units are canceled out in ratios.
                        </strong></p>  

                </div>
            </div>
        </div>






        <div id="part4" class="parts part5">  
            <div class="main-frame-container">  
                <div class="row">
                    <div class="col-md-12">
                        <p style="color:#13007C; font-weight: bold;margin-top: 20px">Classification of Ratios</p>
                        <p>We will now look at the different classifications of ratios.</p>
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-8">
                                <p style="color:#13007C; font-weight: bold;margin-top: 20px">Simple Ratio</p>
                                <p style="">The ratio of two quantities is called simple ratio. The first quantity is called the antecedent and the second quantity is called the subsequent. Subsequent is also known as consequent. As depicted in Figure 2.1.2, in the ratio 2 : 3, 2 is called the antecedent and 3 is the subsequent.  </p> 
                            </div>
                            <div class="col-md-4 col-sm-4  col-xs-4">
                                </p>
                                <center>
                                    <img src="images/math_ratio2.png" class="img img-responsive" style="width:100%;  border: 1px solid black">
                                    <span class="caption"><span class="title">Figure 2.1.2:</span> Different parts of a ratio</span>
                                </center>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>

        <div id="part5" class="parts part5"> 
            <button class="btn btn-primary btn-xs sidenote">Sidenote</button>
            <div class="main-frame-container">  
                <div class="row">
                    <div class="col-md-12">

                        <p style="color:#13007C; font-weight: bold;margin-top: 20px">Equivalent Ratios</p>
                        <p>

                            As mentioned earlier, the ratio 3 : 6 and the ratio 1 : 2 are equivalent. 
                            To find out if two ratios are equal, we divide both the antecedent and the 
                            subsequent by their H.C.F and then check for equality.</p>
                        <p>
                            Some examples of equivalent ratios are:<br>
                            <b>    3 : 6 = 12 : 24 = 6 : 12 = 15 : 30 </b><br>
                            You can also use decimals and percentages to compare two quantities. <br>
                            In our previous example of squares to circles, the ratio of square to circle is 3:6 or simply 1:2.</p>
                    </div>      
                </div>

                <div class="row math_box">
                    <p class="math_box_title"> Example 2.1.1</p>
                    <p style="padding: 15px">Are 3 : 12 and 18 : 72 equal ratios?</p>
                    <div class="" style="padding:10px; margin: 5px">
                        <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                            <p class="math_box_title"> Solution</p>  
                            <p> H.C.F of 3 and 12 is 3<br><br>
                                So, 3 : 12 = (3 ÷ 3) : (12 ÷ 3) = 1 : 4 <br>
                                H.C.F. of 18 and 72 is 18 <br>
                                So, 18 : 72 = (18 ÷ 18) : (72 ÷ 18) = 1 : 4<br>
                                ⸫ 3 : 12 = 18 : 72<br>
                                ⸫ They are equal ratio.<br>

                            </p>


                        </div>
                    </div>
                </div>
            </div>
            <div class="sidenote-container">
                <div class="sidenote-content" style="margin: 0 auto">
                    <p class="text-justify">
                        <b>Rules of Ratio:</b><br>
                        a : b = ka : kb where k is  a positive constant<br>
                        a : b ≠ a + c : b + c<br>
                        where c is  a constant<br><br><br><br>
                        2 fractions <span lang="latex">\frac{a}{b}</span> and <span lang="latex">\frac{c}{d}</span>                are equivalent when,<span lang="latex">\frac{a}{b} = \frac{c}{d}</span>
                        <br>
                        <br>
                        <br> 



                        <br>
                        Similarly, 2 ratios are equivalent when a : b = c : d
                        <br>
                        <br>

                        <br>                    When two ratios are equal, then the cross products of the ratios are equal. That is,
                        <br>
                        <span lang="latex"> a : b = c : d </span><br>
                        <span lang="latex">\frac{a}{b} = \frac{c}{d}</span><br>

                        <span lang="latex"> a \times d = b \times c </span><br>

                        There are infinite number of equivalent ratios of any ratio.Different units can not be used to calculate ratio. To find the ratio of two quantities, their unit should be the same. 
                    </p>  
                    <hr>

                </div>
            </div>

        </div>


        <div id="part9" class="parts part9"> 
            <div class="main-frame-container"> 
                <div class="row math_box" >
                    <div class="" style="padding:10px; margin: 5px">
                        <p class="math_box_title"> Example 2.1.2:</p>
                        <p>What should be placed in the box so that 1 : 4  and 4 :     are equivalent ratios?</p>
                        <div class="col-md-6 col-sm-12 col-xs-12 math_code" style="line-height: 30px;" >

                            <p class="math_box_title">Solution:</p> 

                            Since the antecedent has been multiplied by 4 (1 x 4), <br>we also multiply the subsequent of the unkonwn ratio by 4.<br> So, the box is replaced by 4 x 4 = 16<br>
                            So, 1 : 4 = 4 : 16

                        </div> 
                    </div>

                </div> 
            </div>
        </div>

        <div id="part10" class="parts part10"> 
            <div class="main-frame-container"> 
                <div class="row math_box" >
                    <div class="" style="padding:10px; margin: 5px">
                        <p class="math_box_title"> Example 2.1.3:</p>
                        <p> A certain type of tree always grows at the same rate throughout its life. Given that a 2 year old tree has a height of 20m, what is the height of a 6 months old tree?</p>
                        <div class="col-md-6 col-sm-12 col-xs-12 math_code" style="line-height: 30px;" >

                            <p class="math_box_title">Solution:</p> 
                            Let, the height of the 6 month old tree be 'h' 
                            <br>Since the times are given in two different units, we first need to convert them into the same unit.
                            <br>So, 2 years = 2 x 12 = 24 months.
                            <br>Moreover as the tree is growing at a constant ratio therefore
                            <br>the ratio of highet to year will remain the same
                            <br> 
                            <span lang="latex"> .'. \frac{20}{24} = \frac{h}{6} </span>  <span style="padding-left: 30px; color: green">[ 20 : 24  =  h : 6 ]</span>              
                            <br><span lang="latex"> or, 24 \times h = 20 \times 6</span>
                            <br><span lang="latex"> or, h = \frac{20 \times 6}{24}</span>
                            <br><span lang="latex"> .'.   h = 5m</span>
                        </div> 
                    </div>

                </div> 
            </div>
        </div>



        <div id="part11" class="parts part11"> 
            <div class="main-frame-container"> 
                <div class="row math_box" >
                    <div class="" style="padding:10px; margin: 5px">
                        <p class="math_box_title"> Example 2.1.4:</p>
                        <p> Divide Tk. 300 between Priya and Keya in the ratio 5 : 7</p>
                        <div class="col-md-6 col-sm-12 col-xs-12 math_code" style="line-height: 30px;" >

                            <p class="math_box_title">Solution:</p> 
                            Let us first divide Tk. 300 into 12 equal parts (i.e. 5 + 7). Then, we distribute the money in such a way that Priya receives 5 parts and Keya receives 7 parts.
                            <br> <br>
                            .'.  Priya’s share is <span lang="latex">\frac{5}{12}</span> of TK. 300 = TK. 125 
                            <br> <br> Keya’s share is <span lang="latex">\frac{7}{12}</span> of TK. 300 = TK. 175                 
                        </div> 
                    </div>

                </div> 
            </div>
        </div>

        <div id="part12" class="parts part12"> 
            <div class="main-frame-container">  
                <div class="col-md-12 activity_box"> 
                    <p class="math_box_title">Activity: </p>
                    <div class="col-md-12 math_code">  
                        <div class="paddingLeft30px">1) Identify the antecedent and subsequent of the following ratios</div>
                        <div class="paddingLeft30px"> (a) 12:25  <span class="paddingLeft30px">(b) 15:18</div>
                        <div class="paddingLeft30px">2) Given that Kajol’s height is 1m 20 cm and Kamal’s height is 1m 5cm, what is the ratio of Kajol to Kamal height? </div>
                        <div class="paddingLeft30px">3) In a certain chemical mixture, the ratio of the mass of chemical A and chemical B are in the ratio 4 : 1. If their   combined mass is 500 gm, what is the mass of chemical A in the mixture? </div> 
                    </div>  
                </div>
            </div> 
        </div> 


        <div id="part13" class="parts part13 withsidenote"> 
            <button class="btn btn-primary btn-xs sidenote">Sidenote</button>
            <div class="main-frame-container">  
                <div class="col-md-12"> 
                    <h4 style="margin-top: 15px; color:#13007C; ">  Ratio of less inequality </h4>
                    <p>If the antecedent is smaller than the subsequent of a simple ratio, then the ratio is called ratio of less inequality. For example, both the ratios 3 : 5 and 4 : 7 are ratios of less inequality.</p>

                    <h4 style="margin-top: 15px; color:#13007C; ">  Ratio of greater inequality</h4>
                    <p>If  the  antecedent  is  greater  than  the  subsequent  of  a  simple  ratio,  then  the  ratio is called <span style="color: green; font-weight: bold;"> ratio of greater inequality.</span>

                        <br>For example, both the ratios 5 : 3 and 7 : 4 are ratios of less inequality.

                    </p>

                    <h4 style="margin-top: 15px; color:#13007C; ">Unit ratio</h4>
                    <p>The ratio in which the antecedent and the subsequent are equal is called unit ratio. For example, the ratio 5 : 5 is a unit ratio. This gets simplified to 1 : 1

                    </p>


                    <h4 style="margin-top: 15px; color:#13007C; ">Inverse Ratio</h4>
                    <p>The ratio formed by swapping the antecedent and the subsequent of a simple ratio is called an inverse ratio. For example, the inverse ratio of 3 : 7 is 7 : 3

                    </p>


                    <h4 style="margin-top: 15px; color:#13007C; ">Mixed or Compound Ratio</h4>
                    <p>The ratio whose antecedent and subsequent are formed from the product of the  antecedents  and  subsequents  of  more  than  one  simple  ratio  is  called  a  mixed or compound ratio.For example, the mixed ratio of the ratios 2 : 3  and 7 : 5 is (2 x 7 : 3 x 5) = 14 : 15

                    </p>


                </div>
            </div> 


            <div class="sidenote-container">
                <div class="sidenote-content" style="margin: 0 auto;">
                    <p >     <strong>Ratio of less inequality:</strong><br>   m : n where m < n  </p>                      
                    <p><strong>Ratio of greater inequality:</strong><br> m : n where m > n</p>  
                    <p >A unit ratio will always get simplified to 1 : 1
                        <br> <br>  <br>n : m is the inverse ratio of m : n.The inverse ratio of a unit ratio is also a unit ratio
                        <br>  <br>  <br>  <br>For any two ratios,a : b and c : d, their mixed ratio is a x c : b x d 
                    </p> 
                </div>
            </div>

        </div> 


        <div id="part11" class="parts part11"> 
            <div class="main-frame-container"> 
                <div class="row math_box" >
                    <div class="" style="padding:10px; margin: 5px">
                        <p class="math_box_title"> Example 2.1.5:</p>
                        <p>Find the compound ratio of the ratios 2 : 3, 5 : 9 and 18 : 5</p>
                        <div class="col-md-6 col-sm-12 col-xs-12 math_code" style="line-height: 30px;" >

                            <p class="math_box_title">Solution:</p> 
                            The product of the antecedent is 2 x 5 x 18 = 180<br>
                            The product of the subsequent is 3 x 9 x 5 = 135<br>
                            So the required ratio is 180 : 135 = 4 : 3          <br>    
                        </div> 
                    </div>

                </div> 
            </div>
        </div>


        <div id="part14" class="parts part14"> 
            <div class="main-frame-container">  
                <div class="col-md-12 activity_box"> 
                    <p class="math_box_title">Activity: </p>
                    <div class="col-md-12 math_code" style="line-height: 30px">  
                        <div class="paddingLeft30px">1)  Identify which one of the following are ratio of less equality and ratioof greater equality</div>
                        <div class="paddingLeft30px"> (a) 12:17  <span class="paddingLeft30px">(b) 9:5 </span> <span class="paddingLeft30px">(c) 9:17 </span></div>
                        <div class="paddingLeft30px">2)  Find the inverse ratio of 4 : 5 </div>
                        <div class="paddingLeft30px">3)  Find the mixed ratio of 9 : 11 and 11 : 2 </div> 
                    </div>  
                </div>
            </div> 
        </div> 


        <div id="part14" class="parts part14"> 
            <div class="main-frame-container"> 
                <h2 style="margin-top: 10px; color:#13007C; text-align: center !important">Multiple Choice Questions</h2>





                <div class="row math_box">
                    <div class="" style="padding:10px; margin: 5px">
                        <p class="math_box_title">Example 2.2.1</p>   
                        <p>Convert the following percentages into ratios and decimals</p>

                        (a) 12%<br>
                        (b) 75<br> 

                        <div class=" col-md-12 col-sm-12 col-xs-12 math_code paddingLeft30px">
                            <p class="math_box_title">Solution:</p>

                            <div class="row" lang="latex"> (a) 12\% = \frac{12}{100} = \frac{3}{25} = 3:25 = 0.12 \\</div><br>  
                            <div class="row" lang="latex"> b) 75\% = \frac{75}{100} = \frac{3}{4} = 3:25 = 0.75   </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row math_box">
                <div class="" style="padding:10px; margin: 5px">
                    <p class="math_box_title">Example 2.2.2 </p>  
                    <p>Convert the following ratios to percentages</p>

                    (a) 7 : 25<br>
                    (b) 3 : 8<br> 


                    <div class=" col-md-12 paddingLeft30px math_code">
                        <p class="math_box_title">Solution:</p>

                        <div class="row" lang="latex"> (a) 7:25 = \frac{7}{25} \times 100\% =28\% \\</div><br>  
                        <div class="row" lang="latex"> b) 3.8 = \frac{3}{8}  \times 100\% = \frac{75}{2} =37\frac{1}{2} \% = 37.5\%   </div>
                    </div>
                </div> 
            </div>

            <div class="row math_box" >
                <div class="" style="padding:10px; margin: 5px">
                    <p class="math_box_title">Example 2.2.3</p>
                    <p>The ratio of black pens to blue pens that Mitu has is 4 : 1. Given that Mitu has 15 pens. Find how many blue
                        and black pens that she has? Also express the number of blue pens as a percentage of black pens.</p>
                    <div class="col-md-6 col-sm-12 col-xs-12 math_code" >

                        <p class="math_box_title">Solution:</p>
                        Sume of the ratio = 4 + 1 = 5
                        4 out of 5 pens are black<br>
                        So, <span  lang="latex" class="latexCode"> \frac{4}{5} </span> of 15 pens are black<br>
                        <span style="font-weight: bold;"> .'.</span> 12 pens are black<br>
                        So, the number of blue pens = 15 – 12 = 3 pens<br>
                        Alternatively, we could have used ratio here as well<br>
                        So, the number of blue pens = of 15 = 3 pens
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 math_code" >
                        <p class="math_box_title">2nd Part..</p>

                        Percentage of blue pens to black pens<br>
                        = <span  lang="latex" class="latexCode"> \frac{3}{12} \times 100\% = 25\% </span>
                        <p align="justify">
                            Alternatively, black pens to b lue pens ratio is given,
                            so the inverse ratio of 1 : 4 is the ratio of black pens to blue pens.</p>

                        <span  lang="latex" class="latexCode">  .'. Percentage =  \frac{1}{4} \times 100\% = 25\% </span>
                        <p align="justify"></p>
                    </div>
                </div>

            </div> 





            <div class="row math_box"  >
                <div class="" style="padding:10px; margin: 5px">
                    <p class="math_box_title">Example 3.2.4</p>
                    <p align="justify">A shop sells only Igloo and Polar ice creams. The ratio of Igloo and Polar is 2 : 3 with a total of 50 ice creams on a certain day. At the end of the day, the shop keeper was able to sell 7 Igloo and 4 Polar ice creams. What is the new ratio of Igloo to Polar ice cream left is the shop?</p>
                    <div class="col-md-12 math_code">
                        <p class="math_box_title">Solution:</p>
                        At the beginning of the day, the number of each brand of ice cream is Igloo =  <span lang="latex"> \frac{2}{5} </span> of 50 = 20<br>
                        Polar =   <span lang="latex"> \frac{3}{5} </span>     of 50 = 30<br>
                        At the end of the day, the number of each brand of ice cream is<br>
                        Igloo = 20 – 7 = 13 and Polar = 30 – 4 = 26So, the new ratio is13 : 26 = 1 : 2

                    </div>
                </div>
            </div>


            <div class="row math_box">
                <p class="math_box_title">How to calculate the percentage increase: </p>
                <div class="" style="padding:10px; margin: 5px">
                    <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                        <p class="math_box_title"> Step 1:</p>
                        Work out the difference (increase) between the two numbers you are comparing.<br>
                        <span lang="latex"> Increase = New Value - Original Value</span>

                        <hr>
                        <p class="math_box_title"> Step 2:</p> 
                        <p>
                            Divide the increased amount by the original Value and multiply the answer by 100.</p>
                        <span lang="latex">  .'.   \% increase =\frac{Increased amount}{Original Value} \times 100\%</span>
                        <p>If your answer is a negative Value then you have to understand that it is a percentage decrease</p>


                    </div>
                </div>
            </div>






            <div class="row math_box">
                <p class="math_box_title">How to calculate percentage decrease: </p>
                <div class="" style="padding:10px; margin: 5px">
                    <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                        <p class="math_box_title"> Step 1:</p>
                        Work out the difference (decrease) between the two numbers you are comparing.<br>
                        <span lang="latex"> Decrease = Original Value -  New Value</span>

                        <hr>
                        <p class="math_box_title"> Step 2:</p> 
                        <p>
                            Divide the decrease by the original number and multiply the answer by 100.</p>
                        <span lang="latex">  .'.   \% Decreased  =\frac{Decreased amount}{Original Value} \times 100\%</span>
                    </div>
                </div>
            </div>







            <div class="row math_box">
                <p class="math_box_title">Example 3.2.5: </p>
                <p style="padding: 15px">Tonmoy sold a T-shirt for Tk. 250 which he bought at Tk. 200. What is his percentage profit?</p>
                <div class="" style="padding:10px; margin: 5px">
                    <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                        <p class="math_box_title"> Solution</p> 
                        <span lang="latex"> Profit =  \frac{Selling Price - Cost Price}{Cost Price} \times 100\% </span><br><br>
                        <span lang="latex"> = \frac{250 - 200}{200} \times 100\%   </span><br><br>
                        <span lang="latex"> = 25\%</span>


                    </div>
                </div>
            </div>


















        </div>

        <div id="part21" class="parts part21"> 
            <div class="main-frame-container">  
                <h2 style="margin-top: 10px; color:#13007C; text-align: center !important">Exercise 2.2</h2>

<h1 style="color: red">  ------ Content baki ase ----------

</h1>
                <p style="padding-left: 25px">3.     Drubo scored 115 out of a 150 mark test. If 80% score is requested to get “A”, did he get an “A”?
                </p><p style="padding-left: 25px">4.     In a certain constituency, there are 85,000 voters but 15% of them did not cast their vote.How many people voted?
                </p><p style="padding-left: 25px">5.     After spending 88% of his income, a man is left with Tk. 21, 600. Find his income.
                </p><p style="padding-left: 25px">6. At the beginning of 2015, the height of a tree is 4.58m. At the end of the year, the height is 5.4 m.What is the percentage increase of the tree?
                </p><p style="padding-left: 25px">7.     A florist bought 360 roses at Tk. 60 per dozen. If he sold them at Tk. 7 each, what is his percentage              profit?
                </p><p style="padding-left: 25px">8.     In the last two weeks of a sale, prices are reduced first by 30% and then by a further 40% ofthe new price. What is the final selling price of a shirt which originally cost Tk. 150?
                </p><p style="padding-left: 25px">9.     Over a period of 6 months, a colony of bees increases by 25%. After six months, a disease hits thecolony that kills 30% of the bees. If there were 2000 bees in the hive, how many are there at the end?
                </p><p style="padding-left: 25px">10.    In 2000 a club had 250 members and each of them had to pay Tk. 1000 as annual membership fee.However, in 2015, the membership increased by 4% and the fee increased by 6%. What is thepercentage increase in the earnings of the club?
            </div>
        </div>




        <div id="part21" class="parts part21"> 
            <div class="main-frame-container"> 
                <p style="font-weight: bold; color: blue;">The Unitary method</p>
                <div class="col-md-12">
                    <p align="justify">In the unitary method we find the value of a unit from the value of a multiple of units and the value of a multiple of units from the value of a single unit. When we go to the market to buy any product, we ask the shopkeeper to tell the price of that product. This is called unit price. We can calculate the total price of a number of items, we want to buy, with the help of this unit price. Sometimes, we calculate unit price when the price of a multiple is given. The method to calculate the price of the required items is called the unitary method.</p>
                </div> 
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <p align="justify">First we find the value of one item from the value of a multiple of them and then we find the value of the desired number of items from the value of unit. Usually this method involves the operations of multiplication and division both.</p>
                        <p align="justify">The unitary method is a technique which is used for finding the value of manies by finding the value of a single unit, i.e., 1 unit, (by dividing) and  then    multiplying  the  single  unit  by  our  desired value. In essence, the unitary method is used to find the value of a unit from the value of a multiple (by dividing), and thence the value of another multiple (by multiplying). </p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">

                        <center><img src="images/UnitaryMethod.png" class="img img-responsive" width="100%" title="" alt="" style="padding: 10px; height: 200px">
                            <p class="caption" style="text-align: center !important"><span class="title">Figure 2.3.1: </span>Unitary method</p>  
                        </center>
                    </div> 
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-4 col-sm-6 col-xs-12" style="line-height: 30px;">
                        <p class="math_box_title">For Example, </p>
                        <p align="justify">(i) A pack of 6 balls costs Tk. 48 and we have to buy 4 balls.</p>


                        <p align="justify">(ii) 20  oranges  cost Tk.  60  and we have to buy 8 oranges.</p>

                        <p align="justify">(iii) The cost of 100 kg of wheat is Tk. 850 and we have to buy 40 kg of wheat.</p>


                        <p align="justify">In all the cases, first we find the unit  cost  for  calculating  the  cost  of the desired number of articles. To  find  the  unit  cost  we  divide the  cost  of  many  items  by  the  number  of  articles.  The  unitary  method works as follows</p>
                    </div>

                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <center><img src="images/Unitarymethod-in-action.png" class="img img-responsive" width="100%" title="" alt="" style="padding: 10px; height: auto;">
                            <p class="caption" style="text-align: center !important"><span class="title">Figure 2.3.2:  </span>Unitary method in action</p>  
                        </center>


                    </div>

                    <div class="col-md-12">
                        <h4>Step 1:</h4>
                        Calculate the unit value of the variable required as a “per unit” amount, for example: per hour, per metre, per kilogram, etc. The variable we need to find is always placed to the right

                        <h4>Step 2: </h4>Multiply the “per unit” amount from step 1 with the desired unit (value of the variable of interest).Now let us apply this technique to solve some problems.
                    </div> 
                </div>
            </div>




            <div id="part22" class="parts part22"> 
                <div class="main-frame-container"> 
                    <div class="row math_box">
                        <p class="math_box_title">Example 2.3.1: </p>
                        <p style="padding: 15px">A man walks 7 miles in 2 hours. How far does he walk in 7 hours?</p>
                        <div class="" style="padding:10px; margin: 5px">
                            <div class="col-md-12 col-sm-12 col-xs-12 math_code">
                                <p class="math_box_title"> Solution</p>  
                                <p>To solve this problem first we need to calculate how far the man walks in 1 hour. We assume that he would walks equal distances in any interval of time (i.e. at a constant rate). <br><br>Therefore, the man walks  <span lang="latex">\frac{7}{2}  = 3.5 </span>     miles in 1 hour. In 7 hours, <br><br>the man walks  7 X 3.5 = 24.5   miles
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="part23" class="parts part23"> 
                <div class="main-frame-container"> 
                    <div class="row math_box">
                        <p class="math_box_title">Example 2.3.2: </p>
                        <p style="padding: 15px">Three men can build a wall in 10 days. How long will it take five men to build the same wall?</p>
                        <div class="" style="padding:10px; margin: 5px">
                            <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                                <p class="math_box_title"> Solution</p>  
                                <p>
                                    3 men take 10 days to build a wall<br><br>
                                    1 man takes (10 X 3) days to build the wall (1 man will take more time than 3 men)<br><br>
                                    5 men will take  <span lang="latex"> \frac{10 \times 3}{5} = 6</span> to build the wall (5 men will take less time than 1 man)<br><br>
                                    So, it will take 6 days to build the wall.
                                </p>


                            </div>
                        </div>
                    </div>


                </div>
            </div>









            <div id="part24" class="parts part24"> 
                <div class="main-frame-container">  
                    <div class="row math_box">
                        <p class="math_box_title">Example 2.3.3: </p>
                        <p style="padding: 15px">Alam can do a job in 15 hours and Biplob can do the same job in 10 hours. How long will it take to do the job if both Alam and Biplob do the work together?</p>
                        <div class="" style="padding:10px; margin: 5px">
                            <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                                <p class="math_box_title"> Solution</p>  
                                <p>In 15 hours Alam completes the entire job</p>
                                <p> .'. In 1 hour, <span style="padding-left: 15px; padding-right: 15px"> " </span> <span style="padding-left: 15px; padding-right: 15px"> " </span> <span lang="latex">\frac{1}{15} </span> of the <span style="padding-left: 15px; padding-right: 15px"> " </span> <span style="padding-left: 15px; padding-right: 15px"> " </span> </p>
                                <p>In 10 hours Biplob completes the entire job</p>
                                <p> .'. In 1 hour, <span style="padding-left: 15px; padding-right: 15px"> " </span> <span style="padding-left: 15px; padding-right: 15px"> " </span> <span lang="latex">\frac{1}{10} </span> of the <span style="padding-left: 15px; padding-right: 15px"> " </span> <span style="padding-left: 15px; padding-right: 15px"> " </span> </p>


                                <p>Working together, in 1 hour they finish </span> <span lang="latex">( \frac{1}{15} + \frac{1}{10}  )</span> parts of job  </p>
                                <p style="padding-left:40%"> = <span lang="latex">( \frac{2 + 3 }{30} )</span> parts</p>
                                <p style="padding-left:40%"> = <span lang="latex">( \frac{5}{30} )</span> parts</p> 


                                <p style="padding-left:40%"> = <span lang="latex">( \frac{1}{6} )</span> parts</p> 
                                <br> 
                                <p>
                                    Alam and Biplob complete   <span lang="latex">( \frac{1}{6} )</span>   portion of the task in 1 hour</p>
                                <br>
                                So, they complete the entire task in 
                                <span lang="latex"> (1 \div  \frac{6}{1}   )</span>  hours =  <span lang="latex"> (1 \times \frac{6}{1}   ) </span> hours = 6 hours


                            </div>
                        </div>
                    </div>


                </div>
            </div>









            <div id="part25" class="parts part25"> 
                <div class="main-frame-container">  
                    <div class="row math_box">
                        <p class="math_box_title">Example 2.3.4:</p>
                        <p style="padding: 15px">A ship has sufficient food to supply 600 passengers for 3 weeks. How long would the food last for 800 people?</p>
                        <div class="" style="padding:10px; margin: 5px">
                            <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                                <p class="math_box_title"> Solution</p>  
                                <p>
                                    Using unitary method,<br><br>
                                    For 600 passengers, the food lasts for 3 weeks<br>

                                    For 1 passenger,   
                                <spam style="padding-left: 20px">  </spam> " <spam style="padding-left: 20px"> </spam> "   <spam style="padding-left: 20px"></spam> 
                                <span lang="latex">(600 \times 3) </span>  weeks    <br><br> 
                                For 800 passengers, 
                                <spam style="padding-left: 20px">  </spam> " <spam style="padding-left: 20px"> </spam> "   <spam style="padding-left: 20px"></spam> 
                                <span lang="latex">(\frac{600 \times 3}{800})</span> weeks
                                <br><br> 
                                So, the food will last for 2.25 weeks

                                </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="part26" class="parts part26"> 
                <div class="main-frame-container">  

                    <div class="row math_box">
                        <p class="math_box_title">Example 2.3.5: </p>
                        <p style="padding: 15px">A wheel turns through 90 revolutions per minute. How many degrees does it turn through in 1 second?</p>
                        <div class="" style="padding:10px; margin: 5px">
                            <div class="col-md-12 col-sm-12 col-xs-12 math_code">

                                <p class="math_box_title"> Solution</p> 
                                In 1 minute, a wheel revolves 90 times <br><br> 
                                In 1 minute, a wheel revolves <span lang="latex">(90 \times 360)^{\circ}   </span><br><br> 
                                In 60 seconds, the wheel revolves <span lang="latex"> (90 \times  360)^{\circ} ̊       </span>  


                                <span style="color: green; padding-left: 20px">[1 revolution =   360 ̊  ]</span><br><br> 
                                In 1 second, the wheel revolves <span lang="latex"> (\frac{90 \times 360}{60}) ^{\circ}</span>
                                <span style="color: green; padding-left: 20px">[1 minute  =  60 seconds ]</span><br><br>
                                '.' The wheel revolves <span lang="latex">  540^{\circ}  </span> in 1 second. <br><br> 


                            </div>
                        </div>
                    </div>
                </div>
            </div>












            <div id="part27" class="parts part27"> 
                <div class="main-frame-container">  
                    <div class="col-md-12 activity_box"> 
                        <p class="math_box_title">Activity: </p>
                        <div class="col-md-12 math_code">  
                            <div class="paddingLeft30px">1) A ream of paper contains 480 sheets of paper. A certain box holds 16 reams. What is the number of sheets of paper in 5 of these boxes?</div>

                            <div class="paddingLeft30px">2) On a map <span lang="latex">\frac{1}{3}</span>      inch equals 15 miles. The distance between two towns on a map is 3 inches. Find the actual distance between the two towns.

                            </div>
                            <div class="paddingLeft30px">3)  There are 216 pencils in 18 boxes. How many pencils are there in 20 boxes? </div> 
                        </div>  
                    </div>
                </div> 
            </div> 


            <div id="part28" class="parts part28"> 
                <div class="main-frame-container"> 
                    <h2 style="margin-top: 10px; color:#13007C; text-align: center !important">Multiple Choice Questions</h2>
                    <div class="col-md-6">
                        <div style="padding:15px;">
                            <div class="row question_section">
                                <p style="font-weight: bold"> 1)   5m of pipe weigh is 75kg, what is the weight of 75m of such a pipe?   </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span>  25kg    <br>                                
                                    <span class="number">c)</span> 225m  <br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span>  25m <br> 
                                    <span class="number">d)</span>  225kg2<br> 
                                </div>  
                            </div>
                            <div class="row question_section">
                                <p style="font-weight: bold">2)   6 dozen pencils cost Tk. 144, what is the cost of 5 pencils? </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> Tk. 240<br>                                
                                    <span class="number">c)</span>  Tk. 15<br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span>  Tk.  10 <br> 
                                    <span class="number">d)</span>  Tk. 20<br> 
                                </div> 
                            </div>  


                            <div class="row question_section">
                                <p style="font-weight: bold">3)  car uses 10 litres of petrol to travel75 km. How far will it go using 8 litres? </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 30 km <br>                                
                                    <span class="number">c)</span>  7.5 km<br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span>60 km<br> 
                                    <span class="number">d)</span> 80 km<br> 
                                </div> 
                            </div>  



                            <div class="row question_section">
                                <p style="font-weight: bold">4) It takes a production line 45 hours to make 120 cars. How long does it take to make 200 cars? </p>
                                (a) 75 hours(b) 60 hours(c) 50 hours(d) 100 hours
                                <div class="col-md-6">
                                    <span class="number">a)</span> 75 hours<br>                                
                                    <span class="number">c)</span>60 hours<br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span>50 hours<br> 
                                    <span class="number">d)</span> 100 hours<br> 
                                </div> 
                            </div>   

                            <div class="row question_section">
                                <p style="font-weight: bold">5) If the thickness of 1000 sheets of paper is 8 cm, then what would be the thickness of 550 sheets of this paper?</p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 4 cm  <br>                                
                                    <span class="number">c)</span> <span lang="latex">7\frac{3}{11}</span> cm <br>
                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span>4.4 cm<br> 
                                    <span class="number">d)</span>  7 cm<br> 
                                </div> 
                            </div>   
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div style="padding:15px;">
                            <div class="row question_section">
                                <p style="font-weight: bold">6) The height of an office building is 120 feet. Express this height in inches.[1 feet = 12 inches] </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 10 inches<br>                                
                                    <span class="number">c)</span>  1200 inches<br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span> 1440 inches<br> 
                                    <span class="number">d)</span>none of them<br> 
                                </div> 
                            </div>    
                            <div class="row question_section">
                                <p style="font-weight: bold">7) Rani can types 450 words in half an hour.  How many words would she type in   12 minutes? </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 37.5 words <br>                                
                                    <span class="number">c)</span>  15 words<br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span> 7.5 words<br> 
                                    <span class="number">d)</span> 2, 250 words<br> 
                                </div> 
                            </div>   

                            <div class="row question_section">
                                <p style="font-weight: bold">8) Wajed copied out a 6000-word essay in 80 minutes. How many words can he copy out in 6 hours? </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 27,000<br>                                
                                    <span class="number">c)</span> 54,000 <br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span> 12,000<br> 
                                    <span class="number">d)</span> 10,0009<br> 
                                </div> 
                            </div>                  
                            <div class="row question_section">
                                <p style="font-weight: bold">9) If Jubair can paint a house in 4 hours, and Abdul Alim can paint the same house in 6 hours, how long will it take for both of them to paint the house together?</p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 2.4  hours<br>                                
                                    <span class="number">c)</span> 2  hours <br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span> 10  hours<br> 
                                    <span class="number">d)</span>  4.2  hours<br> 
                                </div> 
                            </div>   



                            <div class="row question_section">
                                <p style="font-weight: bold">10)  people can complete the job in 42 days. How many more people will be needed to do the job in 14 days? </p>
                                <div class="col-md-6">
                                    <span class="number">a)</span> 156                          <br>                                
                                    <span class="number">c)</span> 76<br>

                                </div>
                                <div class="col-md-6">
                                    <span class="number">b)</span> 228<br> 
                                    <span class="number">d)</span> 140<br> 
                                </div> 
                            </div>   

                        </div>
                    </div> 
                </div>
            </div>





            <div id="part29" class="parts part29"> 
                <div class="main-frame-container"> 
                    <h2 style="margin-top: 10px; color:#13007C;text-align: center ">Exercise 2.3</h2>
                    <div class="col-md-12" style="text-align: left; padding-left: 20px; line-height: 30px">
                        1.     A car travels 228 km in 3 hours.<br> 
                        <span style="padding-left:20px"></span> (a)    How long will it take to travel 912 km?<br> 
                        <span style="padding-left:20px"></span> (b)    How far will it travel in 7 hours?<br>  
                        2.     The weight of 56 books is 8 kg.<br> 
                        <span style="padding-left:20px"></span>  (a)    What is the weight of 152 such books?<br> 
                        <span style="padding-left:20px"></span>  (b)    How many such books weigh 5 kg?<br>   
                        3.     A tank that is    full contains 1800 litres. What is its capacity?<br> 
                        4.     An aircraft flying at 500 km/h completes a journey in 8.4 hours. How long would the journey take if it flew at a speed of 420 km/h?<br> 
                        5.     In a camp, there are provisions for 400 peoples for 23 days. If 60 more peoples join the camp,find the number of days the provision will last?<br> 

                        6.     A floor is covered by 800 square tiles measuring 10 cm. How many square tile of length 8 cm will be needed to cover the same floor?<br> 

                        7.An engine has enough fuel to operate at full power for 20 minutes. For how long could the engine operate at 35% of full power?<br> 

                        8.     Jahid can drive to work in 18 minutes if he travels at an average speed of 30 mph. How long will the journey take if he drives at an average speed of 45 mph?<br> 

                        9.     Find the cost of 20 grams of lead at Tk. 600 per kilogram.<br> 

                        10.    If it takes 6 men 4 days to dig a hole 3 feet deep, how long will it take 10 men to dig a hole 7 feet             deep?<br> 

                    </div>
                </div>
            </div>

            <div id="part30" class="parts part30"> 
                <div class="main-frame-container"> 
                    <h2 style="margin-top: 10px; color:#13007C;text-align: center ">SUMMARY</h2>
                    <div class="col-md-12" style="text-align: left; padding-left: 20px; line-height: 30px">
                        1. A ratio is the comparison of two or more numbers <br> 

                        2. A ratio has no units <br> 

                        3. The ratio of two quantities is called simple ratio. The first quantity is called the antecedent and the second quantity is called the subsequent. <br> 

                        4.     2 ratios are equivalent when a : b = c : d (i.e. c : d = ka : kb) <br> 

                        5.     There are an infinite number of equivalent ratios of any ratio <br> 

                        6. If the antecedent is smaller than the subsequent of a simple ratio, then the ratio is called the ratioof less inequality. <br> 

                        7. If the antecedent is greater than the subsequent of a simple ratio, then the ratio is called the ratio of greater inequality. <br> 

                        8. The ratio in which the antecedent and the subsequent are equal is called unit ratio. <br> 

                        9. The ratio formed by swapping the antecedent and the subsequent of a simple ratio is called aninverse ratio. <br> 

                        10. The ratio whose antecedent and subsequent are formed from the product of the corresponding antecedents and subsequents of more than one simple ratio is called a mixed or compound ratio. <br> 

                        11. Percentage can also be expressed as a Decimal or a Fraction <br> 

                        12. To convert from percentage to fraction, just divide the percentage by 100 and remove the ‘%’ sign. <br> 

                        13. To convert ratio to percentage, just multiply the equivalent fraction by 100 and put a ‘%’ sign. <br> 

                        14. The       unitary method is a technique which is used for finding the value of manies by finding the value  of a single unit, i.e., 1 unit. <br> 
                    </div>
                </div>
            </div>


            <div id="part30" class="parts part30"> 
                <div class="main-frame-container"> 
                    <h2 style="margin-top: 10px; color:#13007C;text-align: center ">Concept map</h2>
                    <div class="col-md-12" style="margin:10px">
                        <img src="images/math-cocept-map1.png" width="100%" style="border:2px solid orange;padding: 10px;border-radius: 10px">
                    </div>
                    <div class="col-md-12" style="margin:10px">
                        <img src="images/math-cocept-map2.png" class="img img-responsive" width="100%" style="border:2px solid orange;padding: 10px;border-radius: 10px">
                    </div>

                </div>
            </div> 
        </div>
    </div> 


    <?php //include("bottom.php"); ?>                
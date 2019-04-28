# wp-theme-jquery-a-href-replace-to-parent
script to replace the a href url

# before

    <div class="single-blog">

        <div class="overlay overlay-bg"></div>
        <img width="400" height="200" src="https://apibuild.com/wp-content/uploads/2018/12/smartphone-mobile-screen-beach-sea-water-705037-pxhere.com_-400x200.jpg" class="img-fluid wp-post-image" alt="Building the art for getting started">			                        <div class="blog-post-details">

        <ul class="post-categories">
            <li>
                <a href="https://apibuild.com/?cat=30" rel="category">Art &amp; Design</a>
            </li>
        </ul>
            <a href="https://apibuild.com/?p=1291">
                <h4>Building the art for getting started</h4>
            </a>
        </div>
    </div>



#after

    <div class="single-blog">

        <a href="https://apibuild.com/?p=1291">
            <div class="overlay overlay-bg"></div>
            <img width="400" height="200" src="https://apibuild.com/wp-content/uploads/2018/12/smartphone-mobile-screen-beach-sea-water-705037-pxhere.com_-400x200.jpg" class="img-fluid wp-post-image" alt="Building the art for getting started">			                        </a><div class="blog-post-details"><a href="https://apibuild.com/?p=1291">
        </a>

        <ul class="post-categories">
            <a href="https://apibuild.com/?p=1291">
            </a>
            <li>
                <a href="https://apibuild.com/?p=1291"></a>
                <a href="https://apibuild.com/?cat=30" rel="category">Art &amp; Design</a>
            </li>
        </ul>

        <a href="https://apibuild.com/?p=1291">
            <h4>Building the art for getting started</h4>
        </a>
        </div>
    </div>

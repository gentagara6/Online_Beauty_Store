
<?php

require_once 'BlogPost.php';

class BlogRepository {

    public function getPosts() {

        return [

            new BlogPost(
                "The perfect Lip Care Product for you",
                "../assets/img/blog/b1.jpg",
                "The Rhode Peptide Lip Treatment is the perfect choice for your lip care products",
                " enriched with peptides for hydration and shine. Its nourishing formula helps prevent dryness and keeps your lips soft throughout the day. With regular use, you'll notice smoother, fuller lips and a natural healthy glow.",
                "22/12"
            ),

            new BlogPost(
                "The perfect Christmas gift for your loved ones!",
                "../assets/img/blog/b-2.jpg",
                "Get the beautiful Rhode Packet for your loved ones, full of beautiful surprises!",
                " Each packet is carefully curated with the most loved Rhode products, from lip care to skin essentials. The festive packaging makes it ideal for gifting and spreading holiday cheer.",
                "21/12"
            ),

            new BlogPost(
                "Tate McRae for Rhode",
                "../assets/img/blog/b3.jpg",
                "Beautiful Pop sensation Tate McRae stuns for Rhode, you can get all products at Glow Beauty.",
                " From shimmering lip treatments to radiant skin care, this collaboration highlights the must-have Rhode products inspired by Tate McRae.",
                "20/12"
            ),

            new BlogPost(
                "Get Rhode Beauty Now!",
                "../assets/img/blog/b4.jpg",
                "Glow Beauty is an authorized reseller for Rhode Beauty! Get your products now!",
                " Rhode Beauty offers high-quality lip and skin care. All products are authentic and ready to ship worldwide.",
                "19/12"
            ),

            new BlogPost(
                "The new Lip Care line is the perfect choice for you!",
                "../assets/img/blog/b5.jpg",
                "Feel the most beautiful this holiday season by acquiring the perfect lip care kit by Rhode!",
                " This set includes hydrating treatments, glosses, and balms enriched with vitamins for soft and radiant lips.",
                "18/12"
            ),

        ];
    }
}
?>
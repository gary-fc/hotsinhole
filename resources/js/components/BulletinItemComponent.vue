<template>
    <article class="hsh-bulletin-item-container"
             :class="{'bg-top':bulletin?.type === 'TOP','bg-premium':bulletin?.type === 'PREMIUM','bg-hot':bulletin?.type === 'HOT',}">
        <label class="hsh-bulletin-item-type icon-top-arrow-svgrepo-com"
               v-if="bulletin?.type !== 'FREE' && bulletin?.type === 'TOP'"></label>

        <label class="hsh-bulletin-item-type icon-premium-badge-svgrepo-com"
               v-if="bulletin?.type !== 'FREE' && bulletin?.type === 'PREMIUM'"></label>

        <label class="hsh-bulletin-item-type icon-hot-svgrepo-com-1"
               v-if="bulletin?.type !== 'FREE' && bulletin?.type === 'HOT'"></label>

        <section class="hsh-bulletin-item-container-left" v-if="bulletin?.type !== 'FREE'">
            <!-- Slideshow container -->
            <div class="hsh-slider-container">

                <section class="hsh-slides-container">
                    <!-- Full-width images with number and caption text -->
                    <div class="hsh-slider-item fade" v-for="(item,index) in this.images" :key="index"
                         :class="'hsh-slider-item-' + this.bulletin?.id">
                        <div class="numbertext">1 / 3</div>
                        <img
                            :src="item"
                            style="width:100%">
                        <div class="text">Caption Text</div>
                    </div>

                    <!-- Next and previous buttons -->
                    <a class="prev" v-on:click="plusSlides(-1)"
                       v-if="bulletin?.type !== 'FREE' && bulletin?.type !== 'TOP'">&#10094;</a>
                    <a class="next" v-on:click="plusSlides(1)"
                       v-if="bulletin?.type !== 'FREE' && bulletin?.type !== 'TOP'">&#10095;</a>
                </section>
            </div>
        </section>

        <section class="hsh-bulletin-item-container-right">
            <label class="hsh-txt hsh-bulletin-item-description" :title="this.bulletin?.bulletin_description">
                {{ this.bulletin?.bulletin_description }}
            </label>

            <section class="hsh-bulletin-item-extra">
                <label>{{ this.bulletin?.bulletin_year }} años</label>
                |
                <label>Escorts</label>
                |
                <label>Santa Cruz</label>
                |
                <label>Tercer Anillo</label>
            </section>
        </section>
    </article>
</template>

<script>
export default {
    props: {
        bulletinId: {
            type: Number,
            require: true,
            default: 0
        },
        bulletin: {
            type: Object,
            default: () => ({}),
            require: true
        }
    },
    data() {
        return {
            slideIndex: {
                type: Number
            },
            images: ["https://bo-static.imgskk.com/post/18/e8/18e8219d27db4821bd9e6d266ccb1ee2.jpg?v=84ssm3xe", "https://bo-static.imgskk.com/post/6c/c4/6cc489b8940a442eb6af030a3702eaf2.jpg?listing=premium&v=84ssm3xe"]
        }
    },
    methods: {
        plusSlides(n) {
            this.showSlides(this.slideIndex += n);
        },
        currentSlide(n) {
            this.showSlides(this.slideIndex += n);
        },
        showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("hsh-slider-item-" + this.bulletin?.id);

            if (n > slides.length) {
                this.slideIndex = 1
            }
            if (n < 1) {
                this.slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[this.slideIndex - 1].style.display = "block";
        },
    },
    mounted() {
        this.slideIndex = 1;
        this.showSlides(this.slideIndex);
    }
}
</script>

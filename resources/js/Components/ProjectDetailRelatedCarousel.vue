<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel">
                    <!-- <div class="CardCarousel" v-for="TOP in TopTier" :key="TOP.id">
                        <img :src="TOP.image" alt="">
                    </div> -->
                    <div class="CardCarousel">
                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46865.webp"
                            alt="">
                        <p>Out too the been like hard off. Improve enquire welcom</p>
                    </div>
                    <div class="CardCarousel">
                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46866.webp"
                            alt="">
                        <p>Out too the been like hard off. Improve enquire welcom</p>
                    </div>
                    <div class="CardCarousel">
                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46867.webp"
                            alt="">
                        <p>Out too the been like hard off. Improve enquire welcom</p>
                    </div>
                    <div class="CardCarousel">
                        <img src="https://test-shayansolution.syedhussnainshah.tech/images/OurTopTier/Group 46868.webp"
                            alt="">
                        <p>Out too the been like hard off. Improve enquire welcom</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        TopTier: Array,
    },
    mounted() {
        console.log(this.TopTier);
    }
}
</script>
<style>
.CardCarousel {
    margin-top: 45px;
    max-width: 403px;
    height: 350px;
    flex-shrink: 0;

    >img {
        max-width: 403px;
        height: 212px;
        flex-shrink: 0;
    }

    >p {
        margin-top: 30px;
        color: #000;
        font-family: Inter;
        font-size: 29px;
        font-style: normal;
        font-weight: 500;
        line-height: 125%;
        max-width: 360px;
    }
}
</style>

<template>
    <div class="container" id="TopTierContainer">
        <h1>Our Global <span>Top-Tier</span> Companies Trust</h1>
        <div class="row">
            <div class="col-md-12" id="TopTierContent">
                <ul class="p-2">
                    <li v-for="(item, index) in TopTier" :key="index">
                        <img :src="item.image" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    props: {
        TopTier: Array,
    },

};
</script>
<style scoped>
#TopTierContainer {
    margin-top: 131px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;

    >h1 {
        color: #000;
        font-family: Inter;
        font-size: 49px;
        font-style: normal;
        font-weight: 700;
        line-height: 130%;
        /* 63.7px */

        /* 40.3px */
        >span {
            color: #3219B3;
            font-family: Inter;
            font-size: 49px;
            font-style: normal;
            font-weight: 700;
            line-height: 130%;
        }
    }
}

#TopTierContent {
    background-image: url('https://test-shayansolution.syedhussnainshah.tech/images/TopTierImages/bg.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;

    >ul {
        list-style: none;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;

        @media screen and (max-width: 768px) {
            justify-content: center;
        }

        >li {
            width: 261px;
            height: 82px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
            box-shadow: 1px 4px 12px 0px rgba(0, 0, 0, 0.08);
            margin-top: 41px;

            @media screen and (max-width: 768px) {
                width: 100%;
            }



        }
    }
}
</style>

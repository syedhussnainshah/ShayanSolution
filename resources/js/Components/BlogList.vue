<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12" id="BlogList">
                <ul>
                    <li v-for="Blog in BlogList" :key="Blog.id">
                        <div class="BlogListImage">
                            <img :src="Blog.image" alt="">
                        </div>
                        <div class="BlogListContent">
                            <span>{{ Blog.date }}</span>
                            <h1>{{ Blog.title }}</h1>
                            <p>{{ Blog.description }}</p>
                            <a href="">Read Blog <svg xmlns="http://www.w3.org/2000/svg" width="13" height="6"
                                    viewBox="0 0 13 6" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M10.2265 2.50004L9.08004 1.35359L9.78715 0.646484L11.7871 2.64648L12.1407 3.00004L11.7871 3.35359L9.78715 5.35359L9.08004 4.64648L10.2265 3.50004H0.933594V2.50004H10.2265Z"
                                        fill="#3219B3" />
                                </svg></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-12" id="BlogListPagination">
            <ul>
                <li><a href=""><i class="fa-solid fa-chevron-left"></i></a></li>
                <li class="active"><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">. . .</a></li>
                <li><a href="">9</a></li>
                <li><a href="">10</a></li>
                <li><a href=""><i class="fa-solid fa-chevron-right"></i></a></li>
            </ul>
        </div>
    </div>
</template>
<script>
export default {

    props: {
        BlogList: Array,
    },



};
</script>
<style scoped>
#BlogList {
    >ul {
        list-style: none;
        padding: 0px;

        >li {
            padding-top: 30px;
            padding-bottom: 30px;
            display: flex;
            flex-wrap: wrap;
            border-top: 1px solid #D9D9D9;

            >.BlogListContent {
                @media screen and (min-width: 1400px) {

                    padding-left: 34px;
                }

                >span {
                    color: #0B092D;
                    font-family: Inter;
                    font-size: 16px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: 140%;
                    opacity: 0.7;
                }

                >h1 {
                    max-width: 801px;
                    color: #000;
                    font-family: Inter;
                    font-size: 25px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 127.5%;
                    letter-spacing: -0.75px;
                    margin: 0px;
                }

                >p {
                    color: #0B092D;
                    font-family: Inter;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 500;
                    line-height: 145%;
                    max-width: 987px;
                    opacity: 0.7;
                    margin: 0px;
                    padding: 0px;
                    margin-top: 8px;
                }

                >a {
                    color: #3219B3;
                    font-family: Inter;
                    font-size: 13px;
                    font-style: normal;
                    font-weight: 600;
                    line-height: 106.5%;
                    letter-spacing: -0.39px;
                    display: flex;
                    justify-content: flex-start;
                    align-items: center;
                    text-decoration: none;
                    margin-top: 15px;

                    >svg {
                        margin-left: 8px;
                    }
                }
            }
        }
    }
}

#BlogListImage {
    display: flex;
    justify-content: center;
    align-items: center;
}

#BlogListPagination {
    display: flex;
    justify-content: center;
    align-items: center;

    >ul {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        list-style: none;
        padding: 0px;
        width: 392px;
        padding: 10px;
        margin: auto;

        >li {
            width: 40px;
            height: 40px;
            border: 1px solid lightgray;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;

            >a {
                text-decoration: none;
                font-weight: 500;
                color: #000;
            }
        }

        >li:hover:nth-child(1) {
            background-color: lightgray;
            border: 1px solid lightgray;


            >a {
                color: white;
            }
        }

        >li:hover:nth-child(7) {
            background-color: lightgray;
            border: 1px solid lightgray;


            >a {
                color: white;
            }
        }

        >li:hover {
            border: 1px solid #3219B3;

            >a {

                color: #3219B3;
            }
        }

        >.active {
            border: 1px solid #3219B3;

            >a {

                color: #3219B3;
            }
        }
    }

}
</style>

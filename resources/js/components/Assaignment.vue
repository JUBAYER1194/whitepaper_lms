<template>
    <v-card
        class="mx-auto d-flex flex-wrap"
        max-width="100%"
        flat
        style="padding-top: 5%"

    >

        <dilog></dilog>
        <v-row class="d-flex">
            <v-col
                cols="12"
                md="3"
            >

            </v-col>
            <v-col
                cols="12"
                md="6"
            >
                <h1
                    class="sidebar"
                    style="text-align:center;font-size:140%;background-color:#9652ff;color: white"
                >
                    Assignments
                </h1>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >

            </v-col>
        </v-row>


        <v-row style="margin-top:5%;">
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    color="#9652ff"
                    dark
                    max-width="100%"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight " style="color:darkred;">Deadline: 20/10/2019</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 10%">
                        20th August 2019
                    </v-card-text>


                    <v-card-text class="headline font-weight-bold">
                        "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                    </v-card-text>

                    <v-card-actions>
                        <v-list-item class="grow">
                            <v-list-item-avatar color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                ></v-img>
                            </v-list-item-avatar>

                            <v-list-item-content>
                                <v-list-item-title>Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    color="#9652ff"
                    dark
                    max-width="100%"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight " style="color:darkred;">vacation will start</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 10%">
                        20th August 2019
                    </v-card-text>


                    <v-card-text class="headline font-weight-bold">
                        "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                    </v-card-text>

                    <v-card-actions>
                        <v-list-item class="grow">
                            <v-list-item-avatar color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                ></v-img>
                            </v-list-item-avatar>

                            <v-list-item-content>
                                <v-list-item-title>Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    </v-card-actions>
                </v-card>
            </v-col>
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    color="#9652ff"
                    dark
                    max-width="100%"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight " style="color:darkred;">vacation will start</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 10%">
                        20th August 2019
                    </v-card-text>


                    <v-card-text class="headline font-weight-bold">
                        "Turns out semicolon-less style is easier and safer in TS because most gotcha edge cases are type invalid as well."
                    </v-card-text>

                    <v-card-actions>
                        <v-list-item class="grow">
                            <v-list-item-avatar color="grey darken-3">
                                <v-img
                                    class="elevation-6"
                                    src="https://avataaars.io/?avatarStyle=Transparent&topType=ShortHairShortCurly&accessoriesType=Prescription02&hairColor=Black&facialHairType=Blank&clotheType=Hoodie&clotheColor=White&eyeType=Default&eyebrowType=DefaultNatural&mouthType=Default&skinColor=Light"
                                ></v-img>
                            </v-list-item-avatar>

                            <v-list-item-content>
                                <v-list-item-title>Jubayer Ahmed</v-list-item-title>
                            </v-list-item-content>
                        </v-list-item>

                    </v-card-actions>
                </v-card>
            </v-col>



        </v-row>

    </v-card>
</template>
<script>
    import dilog from './Assignment_dilog'
    export default {
        components:{dilog}
    }

</script>

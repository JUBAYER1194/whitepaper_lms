<template>
    <v-card
        class="mx-auto"
        max-width="100%"
        flat
        style="padding: 50px;margin-top: 50px">
        <v-container>
       <dilog></dilog>

        <H2
            style="text-align:center;color: white;background-color: #9652ff;margin-left: 30%;margin-right: 30%"
       >
            All Announcement
        </H2>

        <v-row style="padding: 23px;margin-top:5%;">
            <v-col
                cols="12"
                md="4"
            >
                <v-card
                    class="mx-auto"
                    color="#9652ff"
                    dark
                    max-width="400"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight-white">Exam on 10th</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 50px">
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
                    max-width="400"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight-white">Exam on 10th</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 50px">
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
                    max-width="400"

                >
                    <v-card-title>
                        <v-icon
                            large
                            left
                        >
                            mdi-twitter
                        </v-icon>
                        <span class="title font-weight-white">Exam on 10th</span>
                    </v-card-title>
                    <v-card-text style="padding-left: 50px">
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
        </v-container>
    </v-card>
</template>
<script>
    import dilog from './Announcement_dilog.vue'
    export default {
       components:{dilog}
    }

</script>

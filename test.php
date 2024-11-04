                    <!-- <div class="inner-div" data-active="false" data-color="w" data-hover="false"></div>
                    <div class="vertical-div" data-active="false" data-hover="false" data-order="first"></div>
                    <div class="inner-div" data-active="false" data-color="w" data-hover="true"></div>
                    <div class="vertical-div" data-active="true" data-hover="false" data-order="first"></div>
                    <div class="inner-div" data-active="false" data-color="w" data-hover="false"></div>


                    <div class="horizontal-div" data-active="true" data-hover="false" data-order="first"></div>
                    <div class="horizontal-div" data-active="true" data-hover="false" data-order="second"></div>
                    <div class="horizontal-div" data-active="false" data-hover="true" data-order="second"></div>


                    <div class="inner-div" data-active="false" data-color="w" data-hover="true"></div>
                    <div class="vertical-div" data-active="false" data-order="first" data-hover="true"></div>
                    <div class="inner-div" data-active="true" data-color="w" data-hover="false"></div>
                    <div class="vertical-div" data-active="true" data-hover="false" data-order="second"></div>
                    <div class="inner-div" data-active="false" data-color="w" data-hover="true"></div>


                    <div class="horizontal-div" data-active="false" data-hover="true" data-order="first"></div>
                    <div class="horizontal-div" data-active="false" data-hover="true" data-order="first"></div>
                    <div class="horizontal-div" data-active="false" data-hover="false" data-order="second"></div>



                    <div class="inner-div" data-active="false" data-color="w" data-hover="false"></div>
                    <div class="vertical-div" data-active="false" data-order="second" data-hover="false"></div>
                    <div class="inner-div" data-active="false" data-color="b" data-hover="true"></div>
                    <div class="vertical-div" data-active="false" data-order="second" data-hover="false"></div>
                    <div class="inner-div" data-active="true" data-color="b" data-hover="false"></div> -->



                    <div class="main-div" id="main-div">

                        <div class="inner-div" data-row="0" data-column="0" data-active="false" data-color="n" data-hover="true"></div>
                        <div class="vertical-div" data-row="0" data-column="0" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="inner-div" data-row="0" data-column="1" data-active="true" data-color="w" data-hover="false"></div>
                        <div class="vertical-div" data-row="0" data-column="1" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="inner-div" data-row="0" data-column="2" data-active="false" data-color="n" data-hover="true"></div>
                        <div class="horizontal-div" data-row="0" data-column="0" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="horizontal-div" data-row="0" data-column="1" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="horizontal-div" data-row="0" data-column="2" data-active="false" data-hover="false" data-order="second"></div>
                        <div class="inner-div" data-row="1" data-column="0" data-active="false" data-color="n" data-hover="true"></div>
                        <div class="vertical-div" data-row="1" data-column="0" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="inner-div" data-row="1" data-column="1" data-active="false" data-color="n" data-hover="true"></div>
                        <div class="vertical-div" data-row="1" data-column="1" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="inner-div" data-row="1" data-column="2" data-active="false" data-color="n" data-hover="true"></div>
                        <div class="horizontal-div" data-row="1" data-column="0" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="horizontal-div" data-row="1" data-column="1" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="horizontal-div" data-row="1" data-column="2" data-active="false" data-hover="false" data-order="second"></div>
                        <div class="inner-div" data-row="2" data-column="0" data-active="false" data-color="n" data-hover="true"></div>
                        <div class="vertical-div" data-row="2" data-column="0" data-active="false" data-hover="false" data-order="second"></div>
                        <div class="inner-div" data-row="2" data-column="1" data-active="true" data-color="b" data-hover="false"></div>
                        <div class="vertical-div" data-row="2" data-column="1" data-active="false" data-hover="false" data-order="second"></div>
                        <div class="inner-div" data-row="2" data-column="2" data-active="false" data-color="n" data-hover="true"></div>


                        <div class="vertical-div" data-row="0" data-column="0" data-active="false" data-hover="true" data-order="first"></div>
                        <div class="vertical-div" data-row="1" data-column="0" data-active="false" data-hover="true" data-order="first"></div>

                    </div>


                    <script>
                        $('.vertical-div').click(function() {
                            let row = $(this).attr('data-row');
                            let column = $(this).attr('data-column');
                            let active = $(this).attr('data-active');
                            let hover = $(this).attr('data-hover');
                            let order = $(this).attr('data-order');

                            if (active == "false" && hover == "true" && order == "first") {
                                $('.cell[data-row="' + row + '"][data-column="' + column + '"]').attr('data-active', 'true').attr('data-false', 'true').attr('data-order', 'first');
                                $('.cell[data-row="' + (row + 1) + '"][data-column="' + column + '"]').attr('data-active', 'true').attr('data-false', 'true').attr('data-order', 'first');

                            }
                        });
                    </script>
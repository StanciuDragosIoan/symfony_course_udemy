<?php

/*
    TWIG extra stuff

    Twig offers tags, filters, functions, tests, operators

        filters in twig are used with |

            {{ controller_name|upper}} (upper is a filter)

        tags are used specifically (check the docs)
        e.g. the set tag is used as:
            {% set foo = 'bar' %}
            *set must be used above the body block


        includes work as:

            {{ include('includes/subview.html.twig', {users:"users"})}}

             *note how we pass a var to the include


        when working with JS, if we want to inlucee the JS from the parent (while still
        using custom JS in the child - in this case in the subview, we need to
        use the {{ parent() }} method in twig)

        we can use tags as:


            {% for i in 1..10  %}
                <div class="{{ cycle(['even','odd'], i)}}">
                    {{ i }}
                </div>
            {% endfor %}

            *this twig block creates divs with the class 'even' or 'odd' depending
            whether i is even or odd
*/
<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* chatbot.html.twig */
class __TwigTemplate_aec69f0867574986c7e211f66f89760868188b60ad45b142d9bdf4920ebfd712 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chatbot.html.twig"));

        $this->parent = $this->loadTemplate("partials/base.html.twig", "chatbot.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"text-center\">Chatbot Interface</h3>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"chat-container\" class=\"overflow-auto\" style=\"height: 300px;\">
                            ";
        // line 13
        if (($context["api_response"] ?? null)) {
            // line 14
            echo "                                <div class=\"message bot\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["api_response"] ?? null), "message", []), "html", null, true);
            echo "</div>
                            ";
        } else {
            // line 16
            echo "                                <div class=\"message bot\">Chatbot response will appear here...</div>
                            ";
        }
        // line 18
        echo "                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <form id=\"chat-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" id=\"message-input\" class=\"form-control\" placeholder=\"Type your message...\">
                                <div class=\"input-group-append\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code for handling chatbot interactions
        document.addEventListener('DOMContentLoaded', function() {
            const chatForm = document.getElementById('chat-form');
            const chatContainer = document.getElementById('chat-container');
            const messageInput = document.getElementById('message-input');

            // Function to add a message to the chat container
            function addMessage(message, isUser = false) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', isUser ? 'user' : 'bot');
                messageElement.innerText = message;
                chatContainer.appendChild(messageElement);
            }

            // Function to handle form submission (sending message)
            chatForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const message = messageInput.value.trim();
                if (message === '') return;
                
                addMessage(`You: \${message}`, true); // Add user message to chat
                sendMessageToChatbot(message);
                messageInput.value = ''; // Clear input field
            });

            // Function to send user message to chatbot (API request)
            function sendMessageToChatbot(message) {
                // Example: Send message to chatbot API and get response
                // Replace this with your actual API request logic
                const apiUrl = 'http://localhost:8000/aibot'; // Your chatbot API URL
                fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ message }),
                })
                .then(response => response.json())
                .then(data => {
                    const botMessage = data.message; // Assuming the API response contains the bot's message
                    addMessage(`Bot: \${botMessage}`); // Add bot's message to chat
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "chatbot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 18,  70 => 16,  64 => 14,  62 => 13,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 offset-md-3\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"text-center\">Chatbot Interface</h3>
                    </div>
                    <div class=\"card-body\">
                        <div id=\"chat-container\" class=\"overflow-auto\" style=\"height: 300px;\">
                            {% if api_response %}
                                <div class=\"message bot\">{{ api_response.message }}</div>
                            {% else %}
                                <div class=\"message bot\">Chatbot response will appear here...</div>
                            {% endif %}
                        </div>
                    </div>
                    <div class=\"card-footer\">
                        <form id=\"chat-form\">
                            <div class=\"input-group\">
                                <input type=\"text\" id=\"message-input\" class=\"form-control\" placeholder=\"Type your message...\">
                                <div class=\"input-group-append\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JavaScript code for handling chatbot interactions
        document.addEventListener('DOMContentLoaded', function() {
            const chatForm = document.getElementById('chat-form');
            const chatContainer = document.getElementById('chat-container');
            const messageInput = document.getElementById('message-input');

            // Function to add a message to the chat container
            function addMessage(message, isUser = false) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', isUser ? 'user' : 'bot');
                messageElement.innerText = message;
                chatContainer.appendChild(messageElement);
            }

            // Function to handle form submission (sending message)
            chatForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const message = messageInput.value.trim();
                if (message === '') return;
                
                addMessage(`You: \${message}`, true); // Add user message to chat
                sendMessageToChatbot(message);
                messageInput.value = ''; // Clear input field
            });

            // Function to send user message to chatbot (API request)
            function sendMessageToChatbot(message) {
                // Example: Send message to chatbot API and get response
                // Replace this with your actual API request logic
                const apiUrl = 'http://localhost:8000/aibot'; // Your chatbot API URL
                fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ message }),
                })
                .then(response => response.json())
                .then(data => {
                    const botMessage = data.message; // Assuming the API response contains the bot's message
                    addMessage(`Bot: \${botMessage}`); // Add bot's message to chat
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    </script>
{% endblock %}
", "chatbot.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\themes\\quark\\templates\\chatbot.html.twig");
    }
}

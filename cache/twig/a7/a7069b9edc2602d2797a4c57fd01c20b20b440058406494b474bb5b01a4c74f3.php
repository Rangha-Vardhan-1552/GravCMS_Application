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
        echo "    <style>
        /* CSS for chat container */
        #chat-container {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            /* border: 1px solid #ccc;
            border-radius: 5px; */
        }

        #chat-form {
            justify-content: flex-end;
            column-gap: 10px
        }
        .message {
            margin-bottom: 10px;
            padding: 8px 12px;
            border-radius: 15px;
            max-width:40%;

        }
        .user {
            background-color: #007bff;
            color: #fff;
            align-self: flex-end;
            margin-left: auto; /* Push user messages to the right */
        }
        .bot {
            background-color: #f0f0f0;
            color: #333;
            align-self: flex-start;
        }
        /* CSS for typing indicator */
        .typing-indicator {
            display: none;
            margin-bottom: 5px; /* Move typing indicator to the bottom */
            font-style: italic;
            align-self: flex-end; /* Align to the right */
        }
        .typing-indicator::after {
            content: 'Typing...';
            animation: typing 1s infinite;
        }
        @keyframes typing {
            0% { opacity: 0; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        /* CSS for input field */
        .form-control {
            border-radius: 10px;
            width: 70%;
        }

        /* CSS for send button */
        .btn-primary {
            border-radius: 10px;
        }

    </style>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6 offset-1\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"text-center\">Chatbot Interface</h3>
                    </div>
                    <div class=\"card-body\">
                        <div>
                            <div id=\"chat-container\" class=\"overflow-auto\"></div>
                            <!-- Typing indicator -->
                            <div class=\"typing-indicator\" id=\"typing-indicator\"></div>
                        </div>
                        
                        
                    </div>
                    <div class=\"card-footer\">
                        <form id=\"chat-form\" class=\"input-group\">
                            <input type=\"text\" id=\"message-input\" class=\"form-control\" placeholder=\"Type your message...\" aria-label=\"Type your message...\" aria-describedby=\"send-button\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\" id=\"send-button\">Send</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chat-container');
            const typingIndicator = document.getElementById('typing-indicator');
            const messageInput = document.getElementById('message-input');

            function addMessage(message, isUser = false) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', isUser ? 'user' : 'bot');
                messageElement.innerText = message;
                chatContainer.appendChild(messageElement);
                chatContainer.scrollTop = chatContainer.scrollHeight; // Scroll to bottom
            }

            function showTypingIndicator() {
                typingIndicator.style.display = 'block';
            }

            function hideTypingIndicator() {
                typingIndicator.style.display = 'none';
            }

            document.getElementById('chat-form').addEventListener('submit', function(event) {
                event.preventDefault();
                const message = messageInput.value.trim();
                if (message === '') return;
                
                addMessage(`You: \${message}`, true);
                showTypingIndicator();
                setTimeout(sendMessageToChatbot, 1000, message);
                messageInput.value = '';
            });

            function sendMessageToChatbot(message) {
                // Replace this with your actual API request logic
                const apiUrl = 'http://localhost:8000/aibot';
                fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ message }),
                })
                .then(response => response.json())
                .then(data => {
                    hideTypingIndicator();
                    const botMessage = data.message;
                    addMessage(`Bot: \${botMessage}`);
                })
                .catch(error => {
                    hideTypingIndicator();
                    addMessage('Bot: Sorry, an error occurred.');
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
        return array (  51 => 4,  45 => 3,  29 => 1,);
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
    <style>
        /* CSS for chat container */
        #chat-container {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            /* border: 1px solid #ccc;
            border-radius: 5px; */
        }

        #chat-form {
            justify-content: flex-end;
            column-gap: 10px
        }
        .message {
            margin-bottom: 10px;
            padding: 8px 12px;
            border-radius: 15px;
            max-width:40%;

        }
        .user {
            background-color: #007bff;
            color: #fff;
            align-self: flex-end;
            margin-left: auto; /* Push user messages to the right */
        }
        .bot {
            background-color: #f0f0f0;
            color: #333;
            align-self: flex-start;
        }
        /* CSS for typing indicator */
        .typing-indicator {
            display: none;
            margin-bottom: 5px; /* Move typing indicator to the bottom */
            font-style: italic;
            align-self: flex-end; /* Align to the right */
        }
        .typing-indicator::after {
            content: 'Typing...';
            animation: typing 1s infinite;
        }
        @keyframes typing {
            0% { opacity: 0; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        /* CSS for input field */
        .form-control {
            border-radius: 10px;
            width: 70%;
        }

        /* CSS for send button */
        .btn-primary {
            border-radius: 10px;
        }

    </style>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-6 offset-1\">
                <div class=\"card\">
                    <div class=\"card-header\">
                        <h3 class=\"text-center\">Chatbot Interface</h3>
                    </div>
                    <div class=\"card-body\">
                        <div>
                            <div id=\"chat-container\" class=\"overflow-auto\"></div>
                            <!-- Typing indicator -->
                            <div class=\"typing-indicator\" id=\"typing-indicator\"></div>
                        </div>
                        
                        
                    </div>
                    <div class=\"card-footer\">
                        <form id=\"chat-form\" class=\"input-group\">
                            <input type=\"text\" id=\"message-input\" class=\"form-control\" placeholder=\"Type your message...\" aria-label=\"Type your message...\" aria-describedby=\"send-button\">
                            <div class=\"input-group-append\">
                                <button type=\"submit\" class=\"btn btn-primary\" id=\"send-button\">Send</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const chatContainer = document.getElementById('chat-container');
            const typingIndicator = document.getElementById('typing-indicator');
            const messageInput = document.getElementById('message-input');

            function addMessage(message, isUser = false) {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message', isUser ? 'user' : 'bot');
                messageElement.innerText = message;
                chatContainer.appendChild(messageElement);
                chatContainer.scrollTop = chatContainer.scrollHeight; // Scroll to bottom
            }

            function showTypingIndicator() {
                typingIndicator.style.display = 'block';
            }

            function hideTypingIndicator() {
                typingIndicator.style.display = 'none';
            }

            document.getElementById('chat-form').addEventListener('submit', function(event) {
                event.preventDefault();
                const message = messageInput.value.trim();
                if (message === '') return;
                
                addMessage(`You: \${message}`, true);
                showTypingIndicator();
                setTimeout(sendMessageToChatbot, 1000, message);
                messageInput.value = '';
            });

            function sendMessageToChatbot(message) {
                // Replace this with your actual API request logic
                const apiUrl = 'http://localhost:8000/aibot';
                fetch(apiUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({ message }),
                })
                .then(response => response.json())
                .then(data => {
                    hideTypingIndicator();
                    const botMessage = data.message;
                    addMessage(`Bot: \${botMessage}`);
                })
                .catch(error => {
                    hideTypingIndicator();
                    addMessage('Bot: Sorry, an error occurred.');
                    console.error('Error:', error);
                });
            }
        });
    </script>
{% endblock %}
", "chatbot.html.twig", "E:\\grav-admin-v1.7.45\\grav-admin\\user\\themes\\quark\\templates\\chatbot.html.twig");
    }
}

<?php
$pageTitle = "Systems Integration";
$pageIcon = "fa-puzzle-piece";
$mainContent = '
    <p class="text-base sm:text-lg mb-4 sm:mb-6">At Best of Breed Technology Ltd., we provide <strong>comprehensive systems integration services</strong> that connect all your business platforms—from security systems and building automation to ERP, CRM, and legacy applications—creating a unified, efficient, and automated technology ecosystem.</p>

    <p class="text-base sm:text-lg mb-4 sm:mb-6">The modern enterprise relies on diverse technologies that often operate in isolation, creating data silos and inefficiencies. Our integration solutions ensure all your systems communicate seamlessly, enabling real-time data sharing, cross-platform automation, and a single source of truth for your entire organization.</p>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Our Integration Services</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4 sm:mt-6">
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-building text-xl sm:text-2xl text-purple-600 dark:text-purple-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">Enterprise Application Integration (EAI)</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Connect your core business applications:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>ERP integration</strong> - Connect finance, HR, supply chain</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>CRM integration</strong> - Sync customer data across systems</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>HR systems</strong> - Payroll to accounting automation</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Legacy system modernization</strong> - Bridge old and new</li>
            </ul>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-microchip text-xl sm:text-2xl text-purple-600 dark:text-purple-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">IoT & OT Integration</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Connect operational technology with IT systems:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Industrial sensors</strong> - Real-time monitoring</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Building automation</strong> - HVAC, lighting, access control</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Smart devices</strong> - IoT data integration</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>SCADA systems</strong> - Industrial control integration</li>
            </ul>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-sync-alt text-xl sm:text-2xl text-purple-600 dark:text-purple-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">Data Synchronization</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Ensure data consistency across platforms:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Master data management</strong> - Single source of truth</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Real-time replication</strong> - Instant updates</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Bidirectional sync</strong> - Two-way updates</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Conflict resolution</strong> - Handle data conflicts</li>
            </ul>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-code-branch text-xl sm:text-2xl text-purple-600 dark:text-purple-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">API Gateway Management</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Secure, scalable data access:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>API design & development</strong> - RESTful, GraphQL</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Security & authentication</strong> - OAuth, JWT, API keys</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Rate limiting</strong> - Control traffic</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Analytics & monitoring</strong> - Track usage</li>
            </ul>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Integration Approaches</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4 sm:mt-6">
        <div class="p-4 sm:p-5 light:bg-purple-50 dark:bg-purple-900/30 rounded-lg border-l-4 border-purple-600">
            <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Point-to-Point Integration</h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Direct connections between two systems. Ideal for simple integrations with a limited number of applications where speed and simplicity are priorities.</p>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-purple-50 dark:bg-purple-900/30 rounded-lg border-l-4 border-purple-600">
            <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Middleware/ESB</h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Enterprise Service Bus architecture provides a central hub for all integrations. Perfect for complex environments with many systems that need to communicate.</p>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-purple-50 dark:bg-purple-900/30 rounded-lg border-l-4 border-purple-600">
            <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Microservices Integration</h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Modern architecture where applications are built as suites of independently deployable services. Enables scalability and technology diversity.</p>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-purple-50 dark:bg-purple-900/30 rounded-lg border-l-4 border-purple-600">
            <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Cloud Integration</h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Connect on-premise systems with cloud applications, or integrate multiple cloud platforms (SaaS-to-SaaS). Essential for hybrid IT environments.</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Integration Benefits</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4">
        <div class="flex items-start p-3 light:bg-green-50 dark:bg-green-900/30 rounded-lg">
            <i class="fas fa-bolt text-green-600 mr-3 mt-1 text-base"></i>
            <div>
                <strong class="light:text-gray-800 dark:text-gray-200">Eliminate Data Silos:</strong>
                <span class="text-sm light:text-gray-700 dark:text-gray-300"> Break down barriers between departments and systems. Everyone works from the same accurate, up-to-date information.</span>
            </div>
        </div>
        
        <div class="flex items-start p-3 light:bg-green-50 dark:bg-green-900/30 rounded-lg">
            <i class="fas fa-rocket text-green-600 mr-3 mt-1 text-base"></i>
            <div>
                <strong class="light:text-gray-800 dark:text-gray-200">Automate Workflows:</strong>
                <span class="text-sm light:text-gray-700 dark:text-gray-300"> Create powerful cross-platform automations. When one system updates, others react automatically—no manual intervention needed.</span>
            </div>
        </div>
        
        <div class="flex items-start p-3 light:bg-green-50 dark:bg-green-900/30 rounded-lg">
            <i class="fas fa-chart-line text-green-600 mr-3 mt-1 text-base"></i>
            <div>
                <strong class="light:text-gray-800 dark:text-gray-200">Real-time Visibility:</strong>
                <span class="text-sm light:text-gray-700 dark:text-gray-300"> Get a complete, real-time view of your business operations. Make faster, better-informed decisions with consolidated data.</span>
            </div>
        </div>
        
        <div class="flex items-start p-3 light:bg-green-50 dark:bg-green-900/30 rounded-lg">
            <i class="fas fa-coins text-green-600 mr-3 mt-1 text-base"></i>
            <div>
                <strong class="light:text-gray-800 dark:text-gray-200">Reduce Costs:</strong>
                <span class="text-sm light:text-gray-700 dark:text-gray-300"> Eliminate manual data entry, reduce errors, and lower maintenance costs by replacing complex custom integrations with managed solutions.</span>
            </div>
        </div>
        
        <div class="flex items-start p-3 light:bg-green-50 dark:bg-green-900/30 rounded-lg">
            <i class="fas fa-expand-arrows-alt text-green-600 mr-3 mt-1 text-base"></i>
            <div>
                <strong class="light:text-gray-800 dark:text-gray-200">Scalability:</strong>
                <span class="text-sm light:text-gray-700 dark:text-gray-300"> Integration platforms grow with your business. Add new applications and data sources without rebuilding your entire architecture.</span>
            </div>
        </div>
        
        <div class="flex items-start p-3 light:bg-green-50 dark:bg-green-900/30 rounded-lg">
            <i class="fas fa-shield-alt text-green-600 mr-3 mt-1 text-base"></i>
            <div>
                <strong class="light:text-gray-800 dark:text-gray-200">Enhanced Security:</strong>
                <span class="text-sm light:text-gray-700 dark:text-gray-300"> Centralized security for all data exchanges. Implement consistent authentication, encryption, and access controls across your entire ecosystem.</span>
            </div>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Integration Technologies</h3>
    
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3 mt-4">
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-code text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">REST APIs</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-database text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">GraphQL</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-exchange-alt text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">SOAP</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-envelope text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Message Queues</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-stream text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Apache Kafka</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-cloud text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">MuleSoft</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-project-diagram text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Dell Boomi</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-plug text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Zapier</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Industry Applications</h3>
    
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3 mt-4">
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-building text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Corporate</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-warehouse text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Manufacturing</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-hospital text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Healthcare</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-university text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Finance</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-store text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Retail</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-truck text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Logistics</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-school text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Education</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-hotel text-xl text-purple-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Hospitality</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Frequently Asked Questions</h3>
    
    <div class="space-y-3 sm:space-y-4 mt-4">
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">How do I know if my business needs systems integration?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">If your staff manually re-enters data between systems, if you have inconsistent information across departments, or if you cannot get a complete view of your operations, integration will deliver significant value.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">How long does an integration project take?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">Simple point-to-point integrations can be completed in days. Complex enterprise-wide integration projects may take several months. We provide timelines after understanding your specific requirements.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Can you integrate legacy systems with modern cloud applications?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">Yes! This is one of our specialties. We build bridges between older on-premise systems and modern cloud platforms, extending the life of your legacy investments while enabling new capabilities.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">How do you ensure data security during integration?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">We implement encryption for data in transit and at rest, secure authentication protocols, and role-based access controls. All integrations follow industry security best practices and compliance requirements.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">What happens if one system goes down?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">We design integrations with error handling and queuing mechanisms. If a target system is unavailable, data is queued and automatically synced when the system comes back online—no data loss.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Do you provide ongoing support after integration?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">Absolutely! We offer monitoring, maintenance, and support packages to ensure your integrations continue running smoothly. We also handle updates when your connected systems change.</p>
        </div>
    </div>

    <div class="mt-6 sm:mt-8 p-4 sm:p-6 light:bg-purple-50 dark:bg-purple-900/30 rounded-lg border-2 light:border-purple-200 dark:border-purple-800">
        <h4 class="text-lg sm:text-xl md:text-2xl font-bold flex items-center light:text-gray-800 dark:text-gray-200">
            <i class="fas fa-puzzle-piece text-purple-600 mr-2 text-base sm:text-lg"></i>Free Integration Assessment
        </h4>
        <p class="text-sm sm:text-base mt-2 light:text-gray-700 dark:text-gray-300">Not sure where to start with systems integration? We offer a complimentary assessment of your current technology landscape, identifying integration opportunities and providing a roadmap for creating a unified business ecosystem. <a href="index.php#info-contacts-support" class="text-purple-600 dark:text-purple-400 underline font-semibold">Contact us today!</a></p>
    </div>
';

$serviceLinks = [
    ["title" => "IP Surveillance & Software", "file" => "ip.php", "icon" => "fa-video"],
    ["title" => "Access Control", "file" => "access.php", "icon" => "fa-fingerprint"],
    ["title" => "Telecommunication", "file" => "communication.php", "icon" => "fa-phone-alt"],
    ["title" => "Enterprise Networks", "file" => "enterprise.php", "icon" => "fa-network-wired"],
    ["title" => "Power Solutions", "file" => "power.php", "icon" => "fa-bolt"],
    ["title" => "Software Development", "file" => "software.php", "icon" => "fa-code"],
    ["title" => "Systems Integration", "file" => "system.php", "icon" => "fa-puzzle-piece"],
    ["title" => "Cybersecurity", "file" => "cyber.php", "icon" => "fa-shield-alt"],
    ["title" => "Cloud Computing", "file" => "cloud.php", "icon" => "fa-cloud"],
    ["title" => "Data Analytics", "file" => "data.php", "icon" => "fa-chart-line"],
];

$currentFile = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en" class="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes">
    <title><?php echo $pageTitle; ?> | Best of Breed Technology Ltd. Mombasa</title>
    <meta name="description" content="Professional systems integration services in Mombasa and across Kenya. Connect ERP, CRM, IoT, and legacy systems for seamless data flow and automation.">
    <meta name="keywords" content="systems integration Kenya, enterprise application integration, API management, IoT integration, Mombasa, data synchronization">
    <link rel="canonical" href="https://bestofbreedtechnologyltd.co.ke/<?php echo $currentFile; ?>">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            transition: background-color 0.3s ease, color 0.3s ease;
            overflow-x: hidden;
            width: 100%;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        /* Light mode - IMPROVED CONTRAST */
        .light body { 
            background-color: #f8fafc; 
            color: #1a202c;
        }
        .light .header { 
            background-color: #ffffff; 
            border-bottom: 1px solid #e2e8f0; 
        }
        .light .nav-link { 
            background-color: #ffffff; 
            border: 1px solid #e2e8f0; 
            color: #1e293b;
        }
        .light .nav-link-active { 
            background-color: #2563eb;
            color: white; 
            box-shadow: 0 4px 6px -1px rgba(37, 99, 235, 0.3); 
        }
        .light .nav-link-active span {
            color: white !important;
        }
        .light .service-card { 
            background-color: #ffffff; 
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); 
        }
        
        /* Fix for service titles and text in light mode */
        .light .service-card h2,
        .light .service-card h3,
        .light .service-card h4 {
            color: #0f172a;
        }
        
        .light .service-card p,
        .light .service-card li,
        .light .service-card .text-gray-700 {
            color: #1e293b;
        }
        
        .light .service-card .light\:text-gray-800 {
            color: #0f172a !important;
        }
        
        .light .service-card .light\:text-gray-700 {
            color: #1e293b !important;
        }
        
        .light .service-card .light\:text-purple-700 {
            color: #7e1e6b !important;
        }
        
        .light .service-card .light\:text-purple-800 {
            color: #5b1e5b !important;
        }
        
        /* Sidebar text fixes */
        .light aside h3 {
            color: #0f172a !important;
        }
        
        .light .nav-link span {
            color: #1e293b;
        }
        
        .light .nav-link-active span {
            color: white;
        }
        
        /* Service icon backgrounds */
        .light .service-icon {
            background-color: #dbeafe;
        }
        
        /* FAQ section text */
        .light .border p {
            color: #1e293b;
        }
        
        .light .border h4 {
            color: #0f172a;
        }
        
        /* Light background sections */
        .light .light\:bg-gray-50,
        .light .light\:bg-gray-100 {
            background-color: #f1f5f9;
        }
        
        .light .light\:bg-gray-50 p,
        .light .light\:bg-gray-100 p,
        .light .light\:bg-gray-50 strong,
        .light .light\:bg-gray-100 strong {
            color: #0f172a;
        }
        
        /* Purple and Green boxes */
        .light .light\:bg-purple-50 {
            background-color: #faf5ff;
        }
        
        .light .light\:bg-green-50 {
            background-color: #f0fdf4;
        }
        
        .light .light\:bg-purple-50 p,
        .light .light\:bg-purple-50 h4,
        .light .light\:bg-green-50 p,
        .light .light\:bg-green-50 h4 {
            color: #1e293b;
        }
        
        /* Dark mode */
        .dark body { background-color: #1a202c; color: #e2e8f0; }
        .dark .header { background-color: #2d3748; border-bottom: 1px solid #4a5568; }
        .dark .nav-link { background-color: #2d3748; border: 1px solid #4a5568; color: #cbd5e0; }
        .dark .nav-link-active { background-color: #63b3ed; color: #1a202c; box-shadow: 0 4px 6px -1px rgba(99, 179, 237, 0.3); }
        .dark .service-card { background-color: #2d3748; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3); }
        
        /* Animations */
        @keyframes gradient-move {
            0% { background-position: 0% 50%; } 50% { background-position: 100% 50%; } 100% { background-position: 0% 50%; }
        }
        .hero-background { 
            background: linear-gradient(-45deg, #1e40af, #2b6cb0, #1a202c, #2d3748); 
            background-size: 400% 400%; 
            animation: gradient-move 25s ease infinite; 
            position: absolute; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            opacity: 0.95; 
            z-index: -1; 
        }
        
        @keyframes slide-up { 
            from { transform: translateY(20px); opacity: 0; } 
            to { transform: translateY(0); opacity: 1; } 
        }
        .hero-text-animate > * { 
            opacity: 0; 
            animation: slide-up 0.8s ease-out forwards; 
        }
        .hero-text-animate > *:nth-child(1) { animation-delay: 0.3s; } 
        .hero-text-animate > *:nth-child(2) { animation-delay: 0.5s; } 
        .hero-text-animate > *:nth-child(3) { animation-delay: 0.7s; }
        
        @keyframes image-slide-in { 
            from { transform: scale(0.9) translateX(30px); opacity: 0; } 
            to { transform: scale(1) translateX(0); opacity: 1; } 
        }
        .hero-image { 
            animation: image-slide-in 1.2s cubic-bezier(0.25, 0.46, 0.45, 0.94) forwards; 
            opacity: 0; 
            filter: drop-shadow(0 20px 20px rgba(0, 0, 0, 0.3)); 
        }
        
        .scroll-up { 
            opacity: 0; 
            transform: translateY(20px); 
            transition: opacity 0.6s ease-out, transform 0.6s ease-out; 
        }
        .scroll-up.active { 
            opacity: 1; 
            transform: translateY(0); 
        }
        
        .service-icon-main { 
            background-color: #2b6cb0; 
            color: #ffffff; 
        } 
        .dark .service-icon-main { 
            background-color: #63b3ed; 
            color: #1a202c; 
        }
        
        /* Mobile-specific fixes */
        @media (max-width: 640px) {
            .light .service-card p,
            .light .service-card li,
            .light .nav-link span {
                color: #1e293b;
            }
            
            .light .service-card h3 {
                color: #0f172a;
                font-weight: 700;
            }
            
            .light .service-card h4 {
                color: #0f172a;
                font-weight: 600;
            }
            
            .light aside h3 {
                color: #0f172a !important;
            }
            
            h1 { font-size: 2.5rem !important; line-height: 1.2 !important; }
            h2 { font-size: 1.75rem !important; }
            h3 { font-size: 1.35rem !important; }
            .container { padding-left: 1rem; padding-right: 1rem; }
            .hero-background { opacity: 0.98; }
        }
        
        /* Touch-friendly buttons */
        a, button { 
            -webkit-tap-highlight-color: transparent; 
            touch-action: manipulation;
            min-height: 44px;
            min-width: 44px;
        }
        
        p { line-height: 1.6; }
        
        @media (max-width: 768px) {
            .gap-2 { gap: 0.5rem; }
            .p-8 { padding: 1.5rem; }
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900 dark:bg-gray-900 dark:text-gray-200 transition-colors duration-300">
    <!-- Header -->
    <header class="header sticky top-0 z-50 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4 flex justify-between items-center">
            <a href="index.php" class="logo-link flex items-center space-x-2 sm:space-x-3">
                <img src="image/logo.png" alt="Best of Breed Technology Ltd." class="logo h-8 w-8 sm:h-10 sm:w-10 md:h-12 md:w-12 rounded-full object-cover">
                <span class="text-sm sm:text-base md:text-xl font-bold text-blue-600 dark:text-blue-300 truncate max-w-[150px] sm:max-w-none">Best of Breed</span>
            </a>
            <nav class="flex items-center space-x-2 sm:space-x-4">
                <a href="index.php" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-1.5 sm:py-2 px-3 sm:px-4 md:px-6 rounded-full transition duration-300 shadow-md flex items-center text-xs sm:text-sm md:text-base">
                    <i class="fas fa-arrow-left mr-1 sm:mr-2 text-xs"></i> 
                    <span class="hidden xs:inline">Back</span>
                </a>
                <button id="darkModeToggle" class="p-2 sm:p-3 rounded-full bg-gray-200 dark:bg-gray-700 text-gray-700 dark:text-gray-200 hover:ring-2 hover:ring-blue-500 transition duration-300">
                    <i class="fas fa-moon text-base sm:text-lg dark:hidden"></i>
                    <i class="fas fa-sun text-base sm:text-lg hidden dark:inline-block"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero" class="relative overflow-hidden py-12 sm:py-16 md:py-20 lg:py-24 text-white min-h-[40vh] sm:min-h-[50vh] flex items-center">
        <div class="hero-background"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="hero-text-animate text-center lg:text-left">
                <div class="service-icon-main w-16 h-16 sm:w-20 sm:h-20 rounded-full flex items-center justify-center mb-4 sm:mb-6 text-2xl sm:text-3xl mx-auto lg:mx-0">
                    <i class="fas <?php echo $pageIcon; ?>"></i>
                </div>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black mb-3 sm:mb-4 leading-tight"><?php echo $pageTitle; ?></h1>
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-light mb-4 sm:mb-6 max-w-2xl mx-auto lg:mx-0 text-gray-200">Connect your business systems—ERP, CRM, IoT, and legacy applications—into a unified, automated ecosystem. Eliminate data silos and maximize efficiency.</p>
                <a href="#service-details" class="inline-flex items-center justify-center px-5 sm:px-6 md:px-8 py-2.5 sm:py-3 md:py-4 border border-transparent text-sm sm:text-base md:text-lg font-medium rounded-full shadow-2xl text-white bg-blue-600 hover:bg-blue-700 transition duration-300 transform hover:scale-105">
                    Explore Solutions <i class="fas fa-arrow-down ml-2 sm:ml-3 text-xs sm:text-sm"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main id="service-details" class="max-w-7xl mx-auto px-4 sm:px-6 py-8 sm:py-12 md:py-16">
        <div class="flex flex-col lg:flex-row gap-4 sm:gap-6 md:gap-8">
            
            <!-- Sidebar -->
            <aside class="lg:w-1/4 w-full">
                <div class="service-card p-4 sm:p-5 md:p-6 rounded-xl shadow-lg sticky lg:top-6 top-0">
                    <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-100 border-b pb-2 sm:pb-3 light:border-gray-200 dark:border-gray-700">Our Services</h3>
                    <nav class="space-y-1.5 sm:space-y-2 max-h-[60vh] overflow-y-auto pr-1">
                        <?php foreach ($serviceLinks as $link): ?>
                            <?php $isActive = ($link['file'] == $currentFile); 
                            $linkClass = $isActive ? 'nav-link-active' : 'nav-link light:hover:bg-blue-50 dark:hover:bg-gray-700'; 
                            $iconClass = $isActive ? 'text-white' : 'light:text-blue-600 dark:text-blue-400'; ?>
                            <a href="<?php echo $link['file']; ?>" class="flex items-center p-2 sm:p-3 rounded-lg font-medium transition-all duration-200 hover:scale-[1.01] <?php echo $linkClass; ?>">
                                <div class="service-icon w-8 h-8 sm:w-9 sm:h-10 rounded-full flex items-center justify-center mr-2 sm:mr-3 <?php echo $isActive ? 'bg-white bg-opacity-20' : 'light:bg-blue-100 dark:bg-blue-900'; ?>">
                                    <i class="fas <?php echo $link['icon']; ?> text-xs sm:text-sm <?php echo $iconClass; ?>"></i>
                                </div>
                                <span class="text-xs sm:text-sm md:text-base light:text-gray-800 dark:text-gray-200"><?php echo $link['title']; ?></span>
                            </a>
                        <?php endforeach; ?>
                    </nav>
                </div>
            </aside>

            <!-- Main Content Area -->
            <section class="lg:w-3/4 w-full">
                <div class="service-card p-4 sm:p-6 md:p-8 rounded-xl shadow-lg scroll-up">
                    <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold mb-3 sm:mb-4 light:text-blue-600 dark:text-blue-400 border-b-2 pb-2 sm:pb-3 light:border-blue-200 dark:border-blue-800 flex items-center">
                        <i class="fas <?php echo $pageIcon; ?> mr-2 sm:mr-3 text-xl sm:text-2xl md:text-3xl"></i>
                        <span class="light:text-gray-800 dark:text-gray-200">Service Overview</span>
                    </h2>
                    <div class="prose max-w-none light:text-gray-700 dark:text-gray-300 text-sm sm:text-base md:text-lg leading-relaxed">
                        <?php echo $mainContent; ?>
                    </div>
                    
                    <!-- Call to Action -->
                    <div class="mt-6 sm:mt-8 md:mt-12 p-4 sm:p-5 md:p-6 rounded-xl light:bg-purple-50 dark:bg-purple-900 light:border border-purple-200 dark:border-purple-800 scroll-up">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-2 sm:mb-3 light:text-gray-800 dark:text-purple-200">Ready to Unify Your Systems?</h3>
                        <p class="mb-3 sm:mb-4 light:text-gray-700 dark:text-purple-300 text-sm sm:text-base">Contact us today for a free integration assessment and discover how connecting your business systems can eliminate inefficiencies and unlock new capabilities. Our team in Mombasa is ready to help.</p>
                        <div class="flex flex-col xs:flex-row gap-2 sm:gap-3">
                            <a href="index.php#info-contacts-support" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2.5 sm:py-3 px-4 sm:px-5 md:px-6 rounded-full transition duration-300 shadow-md text-center text-sm sm:text-base">
                                <i class="fas fa-phone-alt mr-1 sm:mr-2"></i> Contact Us
                            </a>
                            <a href="index.php#services" class="light:bg-gray-200 dark:bg-gray-700 light:text-gray-800 dark:text-gray-200 font-semibold py-2.5 sm:py-3 px-4 sm:px-5 md:px-6 rounded-full transition duration-300 shadow-md text-center text-sm sm:text-base">
                                <i class="fas fa-list mr-1 sm:mr-2"></i> All Services
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer class="mt-8 sm:mt-12 md:mt-16 py-6 sm:py-8 light:bg-gray-900 dark:bg-gray-950 border-t light:border-gray-800 dark:border-gray-800">
        <div class="max-w-7xl mx-auto px-4 text-center light:text-gray-300 dark:text-gray-400">
            <div class="flex items-center justify-center mb-3 sm:mb-4">
                <img src="image/logo.png" alt="Best of Breed Technology Ltd." class="h-6 w-6 sm:h-8 sm:w-8 rounded-full mr-2 sm:mr-3">
                <span class="text-sm sm:text-base md:text-lg font-semibold light:text-blue-300 dark:text-blue-400">Best of Breed Technology Ltd.</span>
            </div>
            <p class="text-xs sm:text-sm">&copy; <?php echo date("Y"); ?> Best of Breed Technology Ltd. All rights reserved.</p>
            <p class="mt-1 sm:mt-2 text-xs sm:text-sm">Phone: <a href="tel:+254718874865" class="text-blue-400 hover:underline">+254718874865</a> | Email: <a href="mailto:sales@bestofbreed.co.ke" class="text-blue-400 hover:underline">sales@bestofbreed.co.ke</a></p>
            <p class="mt-1 text-xs sm:text-sm">Canon Towers II, 2nd floor, Moi Avenue, MOMBASA</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const darkModeToggle = document.getElementById('darkModeToggle');
            const htmlElement = document.documentElement;
            const currentTheme = localStorage.getItem('theme');
            
            if (currentTheme === 'dark') { 
                htmlElement.classList.add('dark'); 
                htmlElement.classList.remove('light'); 
            } else { 
                htmlElement.classList.add('light'); 
                htmlElement.classList.remove('dark'); 
                if (!currentTheme) localStorage.setItem('theme', 'light');
            }
            
            darkModeToggle.addEventListener('click', () => {
                if (htmlElement.classList.contains('dark')) { 
                    htmlElement.classList.remove('dark'); 
                    htmlElement.classList.add('light'); 
                    localStorage.setItem('theme', 'light'); 
                } else { 
                    htmlElement.classList.remove('light'); 
                    htmlElement.classList.add('dark'); 
                    localStorage.setItem('theme', 'dark'); 
                }
            });
            
            const observer = new IntersectionObserver((entries) => { 
                entries.forEach(entry => { 
                    if (entry.isIntersecting) entry.target.classList.add('active'); 
                }); 
            }, { threshold: 0.1 });
            
            document.querySelectorAll('.scroll-up').forEach(element => observer.observe(element));
            
            document.querySelectorAll('a[href^="#"]').forEach(anchor => { 
                anchor.addEventListener('click', function (e) { 
                    e.preventDefault(); 
                    const target = document.querySelector(this.getAttribute('href')); 
                    if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' }); 
                }); 
            });
            
            const buttons = document.querySelectorAll('a, button');
            buttons.forEach(btn => {
                btn.addEventListener('touchstart', function() {
                    this.style.opacity = '0.7';
                });
                btn.addEventListener('touchend', function() {
                    this.style.opacity = '1';
                });
            });
        });
    </script>
</body>
</html>
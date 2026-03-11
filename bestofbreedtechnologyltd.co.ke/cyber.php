<?php
$pageTitle = "Cybersecurity & Threat Protection";
$pageIcon = "fa-shield-alt";
$mainContent = '
    <p class="text-base sm:text-lg mb-4 sm:mb-6">At Best of Breed Technology Ltd., we provide <strong>comprehensive cybersecurity solutions</strong> to protect Kenyan businesses from evolving cyber threats. Our multi-layered security approach ensures your data, networks, and systems remain secure against ransomware, phishing, and other sophisticated attacks.</p>

    <p class="text-base sm:text-lg mb-4 sm:mb-6">In today\'s digital landscape, cybersecurity is not optional—it\'s a critical business imperative. We help organizations build robust security postures that protect against current threats while being adaptable to future challenges, ensuring business continuity and regulatory compliance.</p>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Our Cybersecurity Services</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4 sm:mt-6">
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-network-wired text-xl sm:text-2xl text-red-600 dark:text-red-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">Network Security</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Protect your network infrastructure:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Next-gen firewalls</strong> - Advanced threat prevention</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>IDS/IPS</strong> - Intrusion detection & prevention</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Network segmentation</strong> - Limit breach impact</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>VPN solutions</strong> - Secure remote access</li>
            </ul>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-laptop text-xl sm:text-2xl text-red-600 dark:text-red-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">Endpoint Protection</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Secure all devices on your network:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Advanced antivirus</strong> - AI-powered detection</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>EDR solutions</strong> - Endpoint detection & response</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Device control</strong> - USB & peripheral management</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Application whitelisting</strong> - Prevent unauthorized software</li>
            </ul>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-envelope text-xl sm:text-2xl text-red-600 dark:text-red-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">Email Security</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Protect against email-borne threats:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Phishing protection</strong> - Block malicious emails</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>BEC defense</strong> - Business email compromise</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Spam filtering</strong> - Reduce clutter</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Email encryption</strong> - Secure sensitive communications</li>
            </ul>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-white dark:bg-gray-800 rounded-lg shadow-md border light:border-gray-200 dark:border-gray-700">
            <div class="flex items-center mb-2 sm:mb-3">
                <i class="fas fa-database text-xl sm:text-2xl text-red-600 dark:text-red-400 mr-2 sm:mr-3"></i>
                <h4 class="font-bold text-lg sm:text-xl light:text-gray-800 dark:text-gray-200">Data Loss Prevention</h4>
            </div>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mb-2">Protect sensitive data:</p>
            <ul class="text-sm sm:text-base space-y-1 ml-2">
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Data classification</strong> - Identify sensitive info</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>DLP policies</strong> - Control data movement</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Encryption</strong> - Data at rest & in transit</li>
                <li><i class="fas fa-check-circle text-green-600 mr-2 text-xs sm:text-sm"></i><strong>Monitoring</strong> - Track data access</li>
            </ul>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Identity & Access Management</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 mt-4">
        <div class="p-3 light:bg-red-50 dark:bg-red-900/30 rounded-lg text-center">
            <i class="fas fa-fingerprint text-2xl text-red-600 mb-2"></i>
            <h4 class="font-semibold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Multi-Factor Authentication</h4>
            <p class="text-xs sm:text-sm light:text-gray-700 dark:text-gray-300">MFA for all critical systems</p>
        </div>
        <div class="p-3 light:bg-red-50 dark:bg-red-900/30 rounded-lg text-center">
            <i class="fas fa-user-lock text-2xl text-red-600 mb-2"></i>
            <h4 class="font-semibold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Privileged Access</h4>
            <p class="text-xs sm:text-sm light:text-gray-700 dark:text-gray-300">PAM for admin accounts</p>
        </div>
        <div class="p-3 light:bg-red-50 dark:bg-red-900/30 rounded-lg text-center">
            <i class="fas fa-id-card text-2xl text-red-600 mb-2"></i>
            <h4 class="font-semibold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Single Sign-On</h4>
            <p class="text-xs sm:text-sm light:text-gray-700 dark:text-gray-300">SSO for all applications</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Security Assessment Services</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4 sm:mt-6">
        <div class="p-4 sm:p-5 light:bg-orange-50 dark:bg-orange-900/30 rounded-lg border-l-4 border-orange-600">
            <h4 class="font-bold text-base sm:text-lg flex items-center light:text-gray-800 dark:text-gray-200">
                <i class="fas fa-search text-orange-600 mr-2"></i>Vulnerability Assessment
            </h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Comprehensive scanning to identify and prioritize security weaknesses in your systems, networks, and applications before attackers can exploit them.</p>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-orange-50 dark:bg-orange-900/30 rounded-lg border-l-4 border-orange-600">
            <h4 class="font-bold text-base sm:text-lg flex items-center light:text-gray-800 dark:text-gray-200">
                <i class="fas fa-bug text-orange-600 mr-2"></i>Penetration Testing
            </h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Simulated cyber attacks that test your defenses exactly as real hackers would. We identify exploitable vulnerabilities and provide remediation guidance.</p>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-orange-50 dark:bg-orange-900/30 rounded-lg border-l-4 border-orange-600">
            <h4 class="font-bold text-base sm:text-lg flex items-center light:text-gray-800 dark:text-gray-200">
                <i class="fas fa-clipboard-check text-orange-600 mr-2"></i>Security Audits
            </h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Comprehensive review of security policies, controls, and procedures. We assess compliance with industry standards and regulatory requirements.</p>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-orange-50 dark:bg-orange-900/30 rounded-lg border-l-4 border-orange-600">
            <h4 class="font-bold text-base sm:text-lg flex items-center light:text-gray-800 dark:text-gray-200">
                <i class="fas fa-gavel text-orange-600 mr-2"></i>Compliance Assessment
            </h4>
            <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300 mt-1">Ensure your organization meets regulatory requirements (SAMA, NIST, GDPR, HIPAA) and industry standards. We help you achieve and maintain compliance.</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Threat Protection</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6 mt-4 sm:mt-6">
        <div class="p-4 sm:p-5 light:bg-red-50 dark:bg-red-900/30 rounded-lg">
            <div class="flex items-start">
                <i class="fas fa-skull-crosswind text-red-600 mt-1 mr-3 text-lg"></i>
                <div>
                    <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Ransomware Protection</h4>
                    <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300">Advanced defenses against encryption-based attacks including behavior monitoring, backup verification, and rapid recovery procedures.</p>
                </div>
            </div>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-red-50 dark:bg-red-900/30 rounded-lg">
            <div class="flex items-start">
                <i class="fas fa-fish text-red-600 mt-1 mr-3 text-lg"></i>
                <div>
                    <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Phishing Defense</h4>
                    <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300">Employee security awareness training combined with technical controls to identify and block phishing attempts before they reach users.</p>
                </div>
            </div>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-red-50 dark:bg-red-900/30 rounded-lg">
            <div class="flex items-start">
                <i class="fas fa-biohazard text-red-600 mt-1 mr-3 text-lg"></i>
                <div>
                    <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Zero-Day Protection</h4>
                    <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300">Behavioral analysis and sandboxing technologies detect and block previously unknown threats without relying on signature-based detection.</p>
                </div>
            </div>
        </div>
        
        <div class="p-4 sm:p-5 light:bg-red-50 dark:bg-red-900/30 rounded-lg">
            <div class="flex items-start">
                <i class="fas fa-user-secret text-red-600 mt-1 mr-3 text-lg"></i>
                <div>
                    <h4 class="font-bold text-base sm:text-lg light:text-gray-800 dark:text-gray-200">Insider Threat Detection</h4>
                    <p class="text-sm sm:text-base light:text-gray-700 dark:text-gray-300">Monitor for malicious or negligent internal activities. User behavior analytics identify unusual patterns that may indicate data theft or compromise.</p>
                </div>
            </div>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Security Monitoring & Response</h3>
    
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 sm:gap-4 mt-4">
        <div class="p-3 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-eye text-2xl text-red-600 mb-2"></i>
            <h4 class="font-semibold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">24/7 Monitoring</h4>
            <p class="text-xs sm:text-sm light:text-gray-600 dark:text-gray-400">Continuous threat detection</p>
        </div>
        <div class="p-3 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-bell text-2xl text-red-600 mb-2"></i>
            <h4 class="font-semibold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Incident Response</h4>
            <p class="text-xs sm:text-sm light:text-gray-600 dark:text-gray-400">Rapid breach containment</p>
        </div>
        <div class="p-3 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-chart-line text-2xl text-red-600 mb-2"></i>
            <h4 class="font-semibold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Threat Intelligence</h4>
            <p class="text-xs sm:text-sm light:text-gray-600 dark:text-gray-400">Proactive threat hunting</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Industry-Specific Security</h3>
    
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-3 mt-4">
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-university text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Financial</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-hospital text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Healthcare</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-store text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Retail</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-building text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Corporate</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-warehouse text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Industrial</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-school text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Education</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-landmark text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Government</p>
        </div>
        <div class="p-2 light:bg-gray-100 dark:bg-gray-800 rounded-lg text-center">
            <i class="fas fa-church text-xl text-red-600 mb-1"></i>
            <p class="font-semibold text-xs light:text-gray-800 dark:text-gray-200">Non-profit</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Our Security Partners</h3>
    
    <div class="grid grid-cols-3 sm:grid-cols-6 gap-2 sm:gap-3 mt-4">
        <div class="p-2 light:bg-white dark:bg-gray-800 rounded-lg border light:border-gray-200 dark:border-gray-700 text-center">
            <p class="font-bold text-xs sm:text-sm light:text-gray-800 dark:text-gray-200">Fortinet</p>
        </div>
        <div class="p-2 light:bg-white dark:bg-gray-800 rounded-lg border light:border-gray-200 dark:border-gray-700 text-center">
            <p class="font-bold text-xs sm:text-sm light:text-gray-800 dark:text-gray-200">Sophos</p>
        </div>
        <div class="p-2 light:bg-white dark:bg-gray-800 rounded-lg border light:border-gray-200 dark:border-gray-700 text-center">
            <p class="font-bold text-xs sm:text-sm light:text-gray-800 dark:text-gray-200">Kaspersky</p>
        </div>
        <div class="p-2 light:bg-white dark:bg-gray-800 rounded-lg border light:border-gray-200 dark:border-gray-700 text-center">
            <p class="font-bold text-xs sm:text-sm light:text-gray-800 dark:text-gray-200">Cisco</p>
        </div>
        <div class="p-2 light:bg-white dark:bg-gray-800 rounded-lg border light:border-gray-200 dark:border-gray-700 text-center">
            <p class="font-bold text-xs sm:text-sm light:text-gray-800 dark:text-gray-200">Palo Alto</p>
        </div>
        <div class="p-2 light:bg-white dark:bg-gray-800 rounded-lg border light:border-gray-200 dark:border-gray-700 text-center">
            <p class="font-bold text-xs sm:text-sm light:text-gray-800 dark:text-gray-200">Microsoft</p>
        </div>
    </div>

    <h3 class="text-xl sm:text-2xl md:text-3xl font-semibold mt-6 sm:mt-8 mb-3 sm:mb-4 light:text-gray-800 dark:text-gray-200">Frequently Asked Questions</h3>
    
    <div class="space-y-3 sm:space-y-4 mt-4">
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">How do I know if my business needs cybersecurity?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">If your business uses email, stores customer data, processes payments, or has employees using internet-connected devices, you need cybersecurity. Small businesses are actually prime targets for cybercriminals because they often have weaker defenses.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">How much does cybersecurity cost for a small business?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">Costs vary based on size and needs, but basic protection starts from KES 15,000-30,000 per month for a small office. Consider this against the average cost of a data breach, which can exceed KES 5 million.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">What\'s the most common way businesses get hacked?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">Phishing emails remain the #1 attack vector. Employees receive convincing emails that trick them into revealing passwords or downloading malware. This is why security awareness training is essential.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">Can antivirus alone protect my business?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">No. Modern cyber threats require a multi-layered approach including firewalls, email filtering, patch management, access controls, and employee training. Antivirus is just one piece of the puzzle.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">How often should we perform security assessments?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">We recommend at least annual penetration testing, quarterly vulnerability scans, and continuous security monitoring. Regular assessments catch new vulnerabilities before attackers do.</p>
        </div>
        
        <div class="border light:border-gray-200 dark:border-gray-700 rounded-lg p-3 sm:p-4">
            <h4 class="font-bold text-sm sm:text-base light:text-gray-800 dark:text-gray-200">What should we do if we suspect a breach?</h4>
            <p class="text-sm sm:text-base mt-1 light:text-gray-700 dark:text-gray-300">Immediately disconnect affected systems from the network, preserve evidence, and contact our incident response team. Do not attempt to investigate or fix it yourself, as this can destroy critical forensic evidence.</p>
        </div>
    </div>

    <div class="mt-6 sm:mt-8 p-4 sm:p-6 light:bg-red-50 dark:bg-red-900/30 rounded-lg border-2 light:border-red-200 dark:border-red-800">
        <h4 class="text-lg sm:text-xl md:text-2xl font-bold flex items-center light:text-gray-800 dark:text-gray-200">
            <i class="fas fa-shield-virus text-red-600 mr-2 text-base sm:text-lg"></i>Free Security Assessment
        </h4>
        <p class="text-sm sm:text-base mt-2 light:text-gray-700 dark:text-gray-300">Not sure about your security posture? We offer a complimentary initial security assessment to identify vulnerabilities and provide a roadmap for protection. <a href="index.php#info-contacts-support" class="text-red-600 dark:text-red-400 underline font-semibold">Contact us today!</a></p>
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
    <meta name="description" content="Professional cybersecurity services in Mombasa and across Kenya. Network security, endpoint protection, threat detection, and compliance solutions for businesses.">
    <meta name="keywords" content="cybersecurity Kenya, network security, ransomware protection, phishing defense, Mombasa security, data protection">
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
        
        .light .service-card .light\:text-red-700 {
            color: #b91c1c !important;
        }
        
        .light .service-card .light\:text-red-800 {
            color: #991b1b !important;
        }
        
        .light .service-card .light\:text-orange-800 {
            color: #9a3412 !important;
        }
        
        .light .service-card .light\:text-orange-700 {
            color: #c2410c !important;
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
        
        /* Red and Orange boxes */
        .light .light\:bg-red-50 {
            background-color: #fef2f2;
        }
        
        .light .light\:bg-orange-50 {
            background-color: #fff7ed;
        }
        
        .light .light\:bg-red-50 p,
        .light .light\:bg-red-50 h4,
        .light .light\:bg-orange-50 p,
        .light .light\:bg-orange-50 h4 {
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
                <p class="text-base sm:text-lg md:text-xl lg:text-2xl font-light mb-4 sm:mb-6 max-w-2xl mx-auto lg:mx-0 text-gray-200">Comprehensive protection against ransomware, phishing, and cyber threats. Multi-layered security solutions for businesses in Mombasa and across Kenya.</p>
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
                    <div class="mt-6 sm:mt-8 md:mt-12 p-4 sm:p-5 md:p-6 rounded-xl light:bg-red-50 dark:bg-red-900 light:border border-red-200 dark:border-red-800 scroll-up">
                        <h3 class="text-lg sm:text-xl md:text-2xl font-bold mb-2 sm:mb-3 light:text-gray-800 dark:text-red-200">Ready to Secure Your Business?</h3>
                        <p class="mb-3 sm:mb-4 light:text-gray-700 dark:text-red-300 text-sm sm:text-base">Contact us today for a free security assessment and discover vulnerabilities before attackers do. Our team in Mombasa is ready to protect your digital assets.</p>
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
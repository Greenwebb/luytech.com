<!-- Modal for displaying contact details -->
<style>
/* Improved Message Details Viewer CSS with orangish theme */

.modal-content {
    border: none;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(255, 140, 0, 0.1);
    overflow: hidden;
    transition: transform 0.3s ease-in-out;
}

.modal-content:hover {
    transform: translateY(-5px);
}

.modal-header {
    background: linear-gradient(135deg, #FF8C00, #FFA500);
    color: white;
    border-bottom: none;
    padding: 1.5rem 2rem;
    position: relative;
    overflow: hidden;
}

.modal-header::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 50%);
    animation: ripple 15s infinite linear;
    pointer-events: none;
}

@keyframes ripple {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}

.modal-title {
    font-size: 1.75rem;
    font-weight: 700;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

.btn-close {
    color: white;
    opacity: 0.8;
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.btn-close:hover {
    opacity: 1;
    transform: rotate(90deg);
}

.modal-body {
    padding: 2.5rem;
    background-color: #FFFAF0;
}

.modal-body .row {
    margin-bottom: 2rem;
    opacity: 0;
    transform: translateY(20px);
    animation: fadeInUp 0.5s forwards;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.modal-body .row:nth-child(1) { animation-delay: 0.1s; }
.modal-body .row:nth-child(2) { animation-delay: 0.2s; }
.modal-body .row:nth-child(3) { animation-delay: 0.3s; }
.modal-body .row:nth-child(4) { animation-delay: 0.4s; }

.modal-body strong {
    color: #FF8C00;
    font-size: 1.2rem;
    font-weight: 600;
    display: block;
    margin-bottom: 0.75rem;
    position: relative;
    padding-left: 20px;
}

.modal-body strong::before {
    content: '•';
    position: absolute;
    left: 0;
    color: #FFA500;
}

.modal-body p {
    color: #333;
    font-size: 1.1rem;
    margin-bottom: 0;
    line-height: 1.6;
    transition: color 0.3s ease;
}

.modal-body p:hover {
    color: #FF8C00;
}

.modal-footer {
    border-top: none;
    padding: 1rem 2rem 2rem;
    background-color: #FFFAF0;
}

.btn-secondary {
    background-color: #FF8C00;
    border: none;
    padding: 0.75rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-secondary::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300%;
    height: 300%;
    background: rgba(255,255,255,0.1);
    transition: all 0.5s ease;
    transform: translate(-50%, -50%) scale(0);
    border-radius: 50%;
}

.btn-secondary:hover {
    background-color: #E67300;
    box-shadow: 0 4px 12px rgba(255, 140, 0, 0.3);
}

.btn-secondary:hover::after {
    transform: translate(-50%, -50%) scale(1);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .modal-dialog {
        margin: 0.5rem;
    }
    
    .modal-body {
        padding: 1.5rem;
    }
    
    .modal-body strong {
        font-size: 1.1rem;
    }
    
    .modal-body p {
        font-size: 1rem;
    }
}

/* Custom scrollbar for webkit browsers */
.modal-body::-webkit-scrollbar {
    width: 8px;
}

.modal-body::-webkit-scrollbar-track {
    background: #FFF5E6;
}

.modal-body::-webkit-scrollbar-thumb {
    background: #FFA500;
    border-radius: 4px;
}

.modal-body::-webkit-scrollbar-thumb:hover {
    background: #FF8C00;
}

/* Accessibility improvements */
@media (prefers-reduced-motion: reduce) {
    .modal-content,
    .btn-close,
    .modal-body .row,
    .btn-secondary::after {
        animation: none;
        transition: none;
    }
}

/* Focus styles for keyboard navigation */
.btn-close:focus,
.btn-secondary:focus {
    outline: 3px solid #FFA500;
    outline-offset: 2px;
}
</style>
<div class="modal fade" id="contactDetailsModal" tabindex="-1" aria-labelledby="contactDetailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactDetailsModalLabel">{{__('Contact Details')}}</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <strong>{{__('Fullname:')}}</strong>
                        <p id="modalFullName"></p>
                    </div>
                    <div class="col-md-6">
                        <strong>{{__('Email:')}}</strong>
                        <p id="modalEmail"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <strong>{{__('Phone:')}}</strong>
                        <p id="modalPhone"></p>
                    </div>
                    <div class="col-md-6">
                        <strong>{{__('Province:')}}</strong>
                        <p id="modalProvince"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <strong>{{__('Contact Message:')}}</strong>
                        <p id="modalMessage"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <strong>{{__('Sent On:')}}</strong>
                        <p id="modalSentOn"></p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{__('Close')}}</button>
            </div>
        </div>
    </div>
</div>
